import random
flag = 'PING{FakeFlag}'

digit = random.randint(0,15)
def str_list():
    flag_lst=[]
    for i in flag:
        flag_lst.append(ord(i))
    return flag_lst

def shift(flag_in=list):
    flag_out=[]
    for i in flag_in:
        flag_out.append(i<<digit)
    return flag_out

def revert(flag_out):
    return ''.join(str(i) for i in flag_out)

print(revert(shift(str_list())))