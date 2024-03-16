default: build

build:
	avr-gcc -mmcu=atmega328p Hardware-Interrupt.c -o Hardware-Interrupt

burn: build
	avr-objcopy -O ihex -R .eeprom Hardware-Interrupt Hardware-Interrupt.hex

	avrdude -F -V -c arduino -p m328p -P /dev/ttyACM0 -b 115200 -U flash:w:Hardware-Interrupt.hex

clean:
	rm Hardware-Interrupt Hardware-Interrupt.hex