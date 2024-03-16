#define F_CPU 16000000UL //Unsigned Long

#include <avr/io.h>
#include <avr/interrupt.h>
#include <avr/sleep.h>

ISR(TIMER1_OVF_vect) // Timer1 overflow interrupt service routine
{
  PORTB ^= _BV(PB5); // Toggle the LED Pin 13
  TCNT1 = 65535 - (F_CPU/1024)/2; // Reset Timer1
}

int main() {
  DDRB |= _BV(PB5); // Set pin 13 of PORTB for input

  TCNT1 = 65535 - (F_CPU/1024)/2; // Set timer to 0 | max 65535
  //Takes 1/2 second to overflow
  //16mhz/1024 = 15625 (clock rate per second)
  TCCR1B = (1 << CS12) | (1 << CS10); // Set up timer with prescaler = 1024
  TCCR1A = 0; // Set normal mode

  TIMSK1 |= (1 << TOIE1); // Enable overflow interrupt
  sei(); // Enable global interrupts
  
  while(1){
    // sleep_mode(); // Go to sleep
    ;;
  }

  return 0;
}
