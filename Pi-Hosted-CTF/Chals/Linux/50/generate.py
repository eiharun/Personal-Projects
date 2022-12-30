from random import randrange, randint
v = randint(500,7_500)
def generate_ez():
    with open('Chals\\Linux\\50\\file.txt', 'w') as file:
        for i in range(0,10_000):
            if i == v:
                    file.write('Don\'t look here... you saw nothing...\t'+'PING{yOus1ng-_-GREP=is_super`e4$y}' + ' ....Okay Just don\'t tell anyone.... please')
            for x in range(0,randrange(50,500)):        
                file.write(chr(randrange(32,126)))
            file.write('\n')

generate_ez()
#create generate_hrd(), where there are fake flags as well
