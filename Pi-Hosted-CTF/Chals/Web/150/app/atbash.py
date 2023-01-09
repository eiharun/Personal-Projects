import sys
alph=[]
r_alph=[]
for i in range(ord('a'),ord('z')+1):
    alph.append(chr(i))
for i in range(ord('z'),ord('a')-1,-1):
    r_alph.append(chr(i))
alph_map ={}
for n, i in enumerate(alph):
    alph_map[i] = r_alph[n]
    alph_map[i.upper()] = r_alph[n].upper()

def atbash(text):
    cipher =''
    
    for i in text:
        if i in alph or i.lower() in alph:
            cipher += alph_map[i]
        else:
            cipher += i
    return cipher

text = sys.argv[1]
print(atbash(text))