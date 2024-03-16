default: build

build:
	avr-gcc -mmcu=atmega328p Timer-Interrupt.c -o Timer-Interrupt

burn: build
	avr-objcopy -O ihex -R .eeprom Timer-Interrupt Timer-Interrupt.hex

	avrdude -F -V -c arduino -p m328p -P /dev/ttyACM0 -b 115200 -U flash:w:Timer-Interrupt.hex

clean:
	rm Timer-Interrupt Timer-Interrupt.hex