import random
flag = 'PING{b1twhyZe_0p3r4t0R}'

digit = random.randint(0,15)
def convert_bin(input):
    output = ''.join(str(ord(i)) for i in input)
    print(output)
    return bin(int(output))

#print(digit, flag, convert_bin(flag))

def shift(flag_in):
    flag_out = int(flag_in,2)<<digit
    return flag_out

def revert(nums):
    _=[]
    result=[]
    for i in str(nums):
        
        result.append(chr(int(i)))
        
    return result

print(revert(shift(convert_bin(flag))))