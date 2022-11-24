//global variables
int pot0 = 0;//potentiometer 0
int pot1 = 1;//potentiometer 1
int leds[] = {9,8,7,6,5,4,3,2};//array of LED pin numbers
double potVal0 = 0;//input for potentiometer 0
double potVal1 = 0;//input for potentiometer 1

void setup() {
  for (int i=0; i<8; i++){//for loop to initialize all LEDs 0-7
    pinMode(leds[i], OUTPUT);//sets up pinMode for all LEDs
  }
  pinMode(pot0, INPUT);//sets up pinMode for pots0&1
  pinMode(pot1, INPUT);
  Serial.begin(9600);//Serial begin to see pot values and for troubleshooting
}

void loop() {
  potVal0 = analogRead(pot0);//reads value of pot0
  potVal0 *=(5.0/1023.0);//converts 1023 value to 5
  potVal1 = analogRead(pot1);//reads value of pot1
  potVal1 *=(7.0/1023.0);//converts 1023 value to 7
  //potVal1 ranges from 0-7, so 8 values corresponding to each of the 8 LEDs
  
  if (potVal0<=1.6){//if the pot0 value is in the first third of its rotation
    case1(potVal1);//lights up LEDs individually
  }
  else if(potVal0<=3.3){//if the pot0 value is in the second third of its rotation
    case2(potVal1);//lights up in a sequence from 0-7
  }
  else if(potVal0<=5.0){//if the pot0 value is in the final third of its rotation
    case3(potVal1);//light up like a search light
  }
  delay(10);//10ms delay for the loop
}

void case1(double pot1){//function for the first case
  for (int i=0; i<8; i++){//for loop to light up all LEDs rather than lighting up individually
    if(int(pot1)==i){//pot1 is converted to an integer, so that there is no in between values like 1.4 where it doesn't correspond to a LED
      /*if the pot value is the same as the led value inside of the loop
      then the LED corresponding to the pot value will light up*/
      digitalWrite(leds[i], HIGH);
    }
    else{
      /*if the pot value does not equal the led value
      then the LED will turn off. i.e all LEDs that are not selected
      will be turned off*/
      digitalWrite(leds[i], LOW);
    }
    delay(10);//10ms delay for the loop
  }
  
}
void case2(double pot1){//function for the second case
  for (int i=0; i<8; i++){//for loop to light up all LEDs rather than lighting up individually
    if(int(pot1)<=i){//pot1 is converted to an integer, so that there is no in between values like 1.4 where it doesn't correspond to a LED
      /*All of the LEDs whose values are below or equal to the pot value
      will be lit*/
      digitalWrite(leds[i], HIGH);
    }
    else{
      //the rest of the LEDs, whose values are above the pot value will be off
      digitalWrite(leds[i], LOW);
    }
    delay(10);//10ms delay for the loop
  }
}
void case3(double pot1){
  for (int i=0; i<8; i++){//for loop to light up all LEDs rather than lighting up individually
    if(int(pot1)==0){//pot1 is converted to an integer, so that there is no in between values like 1.4 where it doesn't correspond to a LED
      digitalWrite(leds[i], LOW);//First all LEDs are turned off
      //This is because when the (final else if) case is triggered, and the pot value is reverted back to 0 or 7, there are still 3 led active rather than one
      //so the above code resets all the LEDs for the edge case
      digitalWrite(leds[0], HIGH);//edge case first two LEDs are lit
      digitalWrite(leds[1], HIGH);
    }
    else if(int(pot1)==7){
      digitalWrite(leds[i], LOW);//First all LEDs are turned off
      //This is because when the (final else if) case is triggered, and the pot value is reverted back to 0 or 7, there are still 3 led active rather than one
      //so the above code resets all the LEDs for the edge case
      digitalWrite(leds[7], HIGH);//edge case last two LEDs are lit
      digitalWrite(leds[6], HIGH);
    }
    else if(int(pot1)==i||int(pot1)==i+1||int(pot1)==i-1){
      digitalWrite(leds[i], HIGH);//The LEDs corresponding to the 1+/- the pot value will light up
      //starting at pot1=1 and ending at pot1=6 since the previous if statements cover those cases before this block is run
    }
    else{
      digitalWrite(leds[i], LOW);//if none of the cases are met, all the LEDs are turned off
      //i.e. all the other LED's that are not a part of the edge case, or part of the group of three are turned off
    }
    delay(10);//10ms delay for the loop
  }
}