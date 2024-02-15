#define F_CPU 16000000UL

#include <avr/io.h>
#include <util/delay.h>
//https://images.prismic.io/circuito/8e3a980f0f964cc539b4cbbba2654bb660db6f52_arduino-uno-pinout-diagram.png?auto=compress,format
int main() {
  //Data Direction Register for Port B
  DDRB |= (1 << PB5);
  DDRB |= (1 << PB4);
  //Set B4 & B5 as Outputs
  DDRD &= ~(1 << PD2);//Set D2 as Input
  while (1) {
    _delay_ms(1000);
    if (PIND & (1 << PD2)) {
      PORTB |= (1 << PB4);//Digital Pin 12 turn on
      PORTB &= ~(1 << PB5);//Built In LED turn off
    } else {
      PORTB &= ~(1 << PB4);//Digital Pin 12 turn off
      PORTB |= (1 << PB5);//Built In LED turn on
    }
  }
  return 0;
}