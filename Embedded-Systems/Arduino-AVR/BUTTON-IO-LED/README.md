# Arduino Uno Board Pinout

![Arduino Pinout](https://images.prismic.io/circuito/8e3a980f0f964cc539b4cbbba2654bb660db6f52_arduino-uno-pinout-diagram.png?auto=compress,format)

# AVR Port B Registers

![PORTBandDDRBandPINB](ScreenShots/PORTBandDDRBandPINB.png)

> PortB includes Digital pins 8 to 13.

- DDRB: Data Direction Register B
  - Determines whether the pin is an input or output.
- PORTB: Port B Data Register
  - If the pin is an output, the value of the register determines whether the pin is high or low.
- PINB: Port B Input Pins Address

  - If the pin is an input, PINB address can be used to read the value of the pin.

- DDRD: Data Direction Register D
  - Determines whether the pin is an input or output.
- PIND: Port D Input Pins Address
  - If the pin is an input, PIND address can be used to read the value of the pin.

# Implementation

```c
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
```

# Result

![BlinkingButtonLED](ScreenShots/BlinkingButtonLED.gif)
