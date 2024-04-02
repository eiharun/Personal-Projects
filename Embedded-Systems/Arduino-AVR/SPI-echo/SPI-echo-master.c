#define F_CPU 16000000UL

#include <avr/io.h>
#include <avr/interrupt.h>
#include <string.h>
#include <util/delay.h>
typedef enum {false, true} bool;

/*
SCK:    Pin13: PB5
MISO:   Pin12: PB4
MOSI:   Pin11: PB3
SS(CS): Pin10: PB2
*/

#define BUFFER_SIZE 128 //Buffer overflow can occur if input is more than 8 characters
struct buffer{
    uint8_t data[BUFFER_SIZE];
    volatile uint16_t readpos;
    volatile uint16_t writepos;
    volatile char received_char;
    volatile bool transmit;
};typedef struct buffer buffer;

buffer spi;
buffer echo;


#define BAUD 9600
#define BRC ((F_CPU/16/BAUD)-1)//Baudrate Register Calculation

void appendEcho(char c){
    //Add the character to the buffer
    echo.data[echo.writepos] = c;
    echo.writepos++;
    if(echo.writepos >= BUFFER_SIZE){
        echo.writepos = 0;
    }
    echo.transmit = true;
    UCSR0A |= (1<<UDRE0);//Enable the data register empty flag to call the ISR
}

void spi_send(uint8_t *c){
    //Write a character to the SPI data register
    spi.transmit = false;
    SPDR = *c;
    while(spi.transmit==false);
    if (spi.received_char==255){
        UDR0 = '\0';
    }
    else{
        UDR0 = spi.received_char+1;//Echo +1 the received character to UART
    }
    // appendEcho(spi.received_char);
}

void SPItransmit(uint8_t* c, uint16_t len){
    //Write chars from the buffer to the register 
    PORTB &= ~(1<<PB2);//Set SS Low
    _delay_us(10);
    for (uint16_t i = 0; i <  len; i++){
        spi_send(&c[i]);
    }
    PORTB |= (1<<PB2);//Set SS high
    _delay_us(10);
}

void appendSPI(char c){
    //Add the character to the buffer
    spi.data[spi.writepos] = c;
    spi.writepos++;
    if(spi.writepos >= BUFFER_SIZE){
        spi.writepos = 0;
    }
}

void serialWrite(char c[]){
    for(int i=0; i < strlen(c); i++){
        //Add each character to the buffer
        appendEcho(c[i]);
    }
}

int main(){
    spi.received_char = '\0';
    spi.transmit = false;
    echo.received_char = '\0';
    echo.transmit = false;  
    //////////////////////
    //UART INIT
    UBRR0H = (BRC >> 8);
    UBRR0L = BRC;
    //Enable the transmitter and receiver and their interrupts
    UCSR0B |= (1 << TXEN0) | (1 << TXCIE0);
    UCSR0B |= (1 << RXEN0) | (1 << RXCIE0);
    //Set the character size(8 bits) Frame Format:(the rest of the bits are 0 by default, so no need to change them)
    UCSR0C = (1 << UCSZ01) | (1 << UCSZ00);

    //////////////////////
    //SPI INIT
    DDRB = (1<<DDB3) | (1<<DDB5) | (1<<DDB2);//Set MOSI, SCK and SS as output
    PORTB |= (1<<PB2);//Set SS high
    //Writing to SPDR initiates transmission
    SPCR = (1<<SPIE) | (1<<SPE) | (1<<MSTR) | (1<<SPR0) | (1<<SPR1);
    /*SPI interrupt enable, spi enable, MSB first, master, f/128*/
    sei();//Enable global interrupts
    SPItransmit("Hello World", 11);
    while(1){
        // if(echo.transmit){
        //     UCSR0B |= (1<<UDRIE0);//Enable the data register empty interrupt
        //     //Doing this the first time will call the ISR 
        // }
        if (spi.transmit && spi.readpos != spi.writepos){
            //If there is data in the buffer, transmit it
            SPItransmit(spi.data, strlen(spi.data));
            spi.readpos++;
            if(spi.readpos >= BUFFER_SIZE){
                spi.readpos = 0;
            }
            if (spi.readpos == spi.writepos){
                spi.transmit = false;
            }
        }
    }
    return 0;
}


ISR(SPI_STC_vect){
    //This ISR is called when the SPI transmission is complete
    if(SPSR & (1<<WCOL)){
        echo.received_char = SPDR;
        echo.received_char = '\0';
        spi.transmit = true;
    }
    else{
        echo.received_char = SPDR;
        spi.transmit = true;
    }
}



ISR(USART_RX_vect){
    //Handle the received data
    /*Whenever a character is recieved, it's read from the data register
    and then the appropriate response is added to the buffer to be transmitted*/
    spi.received_char = UDR0; //Read the data register
    appendSPI(spi.received_char);
    // serialWrite("\r\n");
    //Start transmitting the data
    echo.transmit=true;
}

// ISR(USART_UDRE_vect){
//     //Handle when the data register is empty after receiving(and ready to transmit data)
//     //If there is data in the buffer and can transmit
//     if(echo.transmit){
//         UDR0 = echo.data[echo.readpos];//Write the data to the register
//         echo.readpos++;
//         if(echo.readpos >= BUFFER_SIZE){
//             //If the buffer is full, reset the position
//             echo.readpos = 0;
//         }
//         if(echo.readpos == echo.writepos){
//             //If the buffer is empty, stop transmitting
//             echo.transmit = false;
//         }
//     }
//     else{
//         //If done transmitting, reset the data register empty flag to 0 (the ISR is called when this is flipped to 1 again)
//         UCSR0A &= ~(1<<UDRE0);
//     }
// }