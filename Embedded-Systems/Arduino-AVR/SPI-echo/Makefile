name:=SPI-echo-master

default: build

build:
	avr-gcc -mmcu=atmega328p ${name}.c -o ${name}

burn: build
	avr-objcopy -O ihex -R .eeprom ${name} ${name}.hex

	avrdude -F -V -c arduino -p m328p -P /dev/ttyACM0 -b 115200 -U flash:w:${name}.hex

clean:
	rm ${name} ${name}.hex