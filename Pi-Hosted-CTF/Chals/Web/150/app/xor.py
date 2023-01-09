import sys
import binascii 
#XOR with key=1
def xor(x,y):
    XOR_result=[]
    for i in x:
        XOR_result.append(ord(i)^y)
    for n in range(len(XOR_result)):
        XOR_result[n]=chr((XOR_result[n]))
    return ''.join(XOR_result)

string = sys.argv[1]

XOR_key = 1

output = xor(string, XOR_key)

print(output)


