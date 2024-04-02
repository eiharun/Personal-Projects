#define F_CPU 16000000UL

#include <avr/io.h>
#include <avr/interrupt.h>
#include <util/delay.h>
#include "string.h"

typedef enum {false, true} bool;

#define BAUD 9600
#define BRC ((F_CPU/16/BAUD)-1)//Baudrate Register Calculation

volatile char received_char = '\0';
volatile bool transmit = false;

#define BUFFER_SIZE 128 //Buffer overflow can occur if input is more than 8 characters
uint8_t serial_buffer[BUFFER_SIZE];
volatile uint16_t serialreadpos = 0;
volatile uint16_t serialwritepos = 0;



void appendSerial(char c){
    //Add the character to the buffer
    serial_buffer[serialwritepos] = c;
    serialwritepos++;
    if(serialwritepos >= BUFFER_SIZE){
        serialwritepos = 0;
    }
    transmit = true;
    UCSR0A |= (1<<UDRE0);//Enable the data register empty flag to call the ISR
    //Essentially calls the ISR everytime a character is added to the buffer, so the ISR can start transmitting the data in the buffer immediately
}

void serialWrite(char c[]){
    for(int i=0; i < strlen(c); i++){
        //Add each character to the buffer
        appendSerial(c[i]);
    }
}

int main(){
    //Set the baud rate registers
    UBRR0H = (BRC >> 8);
    UBRR0L = BRC;
    //Enable the transmitter and receiver and their interrupts
    UCSR0B |= (1 << TXEN0) | (1 << TXCIE0);
    UCSR0B |= (1 << RXEN0) | (1 << RXCIE0);
    //Set the character size(8 bits) Frame Format:(the rest of the bits are 0 by default, so no need to change them)
    UCSR0C = (1 << UCSZ01) | (1 << UCSZ00);
    sei();//Enable global interrupts
    serialWrite("\r\nWelcome To My Echo Program:\r\n");
    while (1){
        if(transmit){
            UCSR0B |= (1<<UDRIE0);//Enable the data register empty interrupt
            //Doing this the first time will call the ISR 
        }
        _delay_ms(10);
    }
    return 0;
}

ISR(USART_TX_vect){
    //Not Necessary
}
ISR(USART_RX_vect){
    //Handle the received data
    /*Whenever a character is recieved, it's read from the data register
    and then the appropriate response is added to the buffer to be transmitted*/
    received_char = UDR0; //Read the data register
    serialWrite("You entered: ");
    appendSerial(received_char);
    serialWrite("\r\n");
    //Start transmitting the data
    transmit = true;
}
ISR(USART_UDRE_vect){
    //Handle when the data register is empty after receiving(and ready to transmit data)
    //If there is data in the buffer and can transmit
    if(transmit && serialreadpos != serialwritepos){
        UDR0 = serial_buffer[serialreadpos];//Write the data to the register
        serialreadpos++;
        if(serialreadpos >= BUFFER_SIZE){
            //If the buffer is full, reset the position
            serialreadpos = 0;
        }
        if(serialreadpos == serialwritepos){
            //If the buffer is empty, stop transmitting
            transmit = false;
        }
    }
    else{
        //If done transmitting, reset the data register empty flag to 0 (the ISR is called when this is flipped to 1 again)
        UCSR0A &= ~(1<<UDRE0);
    }
}