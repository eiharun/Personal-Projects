#define F_CPU 16000000UL


// | Pin | Description                           |
// | --- | ------------------------------------- |
// | GND | Ground (0 V)                          |
// | VCC | 3.1 V to 5.5 V supply voltage         |
// | RES | Reset (3.3V logic only)               | Reset signal for the display. Connected to RESET Pin (or to vcc) |
//4-wire SPI interface
// | CLK | SPI clock (3.3V logic only)           | Clock signal for the SPI interface. |
// | MOS | SPI data (3.3V logic only)            | Data to be written to the display. |
// | CS  | SPI chip select (3.3V logic only)     | Chooses whether the display is active or not. |

// | DC  | Data/command select (3.3V logic only) | Chooses whether data is written to the display or a command is sent to the display. |
#define CLK     PB5 // Pin 13
#define MISO    PB4 // Pin 12
#define MOSI    PB3 // Pin 11
#define CS      PB2 // Pin 10


#include <avr/io.h>


int main(){
    DDRB |= _BV(CLK) | _BV(MOSI) | _BV(CS) | _BV(DC); // Set MOSI, SCK, SS, and DC to outputs
    DDRB &= ~_BV(MISO); // MISO is input
    
    PRR &= ~_BV(PRSPI); // Enable SPI

    SPCR = _BV(SPE) | _BV(MSTR) | _BV(SPR1) | _BV(SPR0); // Enable SPI, Master, set clock rate fck/128
    //SPI mode 0, MSB first

    return 0;
}