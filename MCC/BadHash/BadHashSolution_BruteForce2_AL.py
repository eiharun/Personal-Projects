import BadHashCTF

#Used from https://gist.github.com/pazdera/1121315
import string
ALLOWED_CHARACTERS = string.ascii_letters
NUMBER_OF_CHARACTERS = len(ALLOWED_CHARACTERS)

def characterToIndex(char):
    return ALLOWED_CHARACTERS.index(char)

def indexToCharacter(index):
    if NUMBER_OF_CHARACTERS <= index:
        raise ValueError("Index out of range.")
    else:
        return ALLOWED_CHARACTERS[index]

def next(string):
    """ Get next sequence of characters.
    Treats characters as numbers (0-255). Function tries to increment
    character at the first position. If it fails, new character is
    added to the back of the list.
    It's basically a number with base = 256.
    :param string: A list of characters (can be empty).
    :type string: list
    :return: Next list of characters in the sequence
    :rettype: list
    """
    if len(string) <= 0:
        string.append(indexToCharacter(0))
    else:
        string[0] = indexToCharacter((characterToIndex(string[0]) + 1) % NUMBER_OF_CHARACTERS)
        if characterToIndex(string[0]) is 0:
            return list(string[0]) + next(string[1:])
    return string

def main(hash):
    sequence = list()
    while True:
        sequence = next(sequence)
        #print(sequence)
        if BadHashCTF.hash(msg.join(sequence)) == hash:
            with open(r'flag.txt', 'a') as f:
                f.write("masoncc{" + msg.join(sequence) + "}")
            break
        print("masoncc{" + msg.join(sequence) + "}" + "\nBF2 AL")

hash = input('Input hash: ')

msg_hash = ""
message_list = []
msg = ''
#msg_hash = BadHashCTF.hash(msg.join(main()))
main(hash)


