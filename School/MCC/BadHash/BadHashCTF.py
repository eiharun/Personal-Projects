state = []
hash_len=50
for i in range(0,hash_len):
	state.append(0)
def round():
	for i in range(0,hash_len):
		state[i]=(state[i]+state[(i+1)%hash_len])%128
def absorb(message):
	message_list = list(message)
	message_list_ints = []
	for m in message_list:
		message_list_ints.append(ord(m))
	message_len = len(message_list_ints)
	for i in range(hash_len):
		state[i]=state[i]+message_list_ints[i%message_len]
def hash(message):
	absorb(message)
	for i in range(0,21):
		round()
	hash_string = ""
	for c in range(0,hash_len):
		add_str = hex(state[c])[2:]
		if len(add_str) < 2:
			add_str="0"+add_str
		hash_string+=add_str
	print('0x' + hash_string)
	return "0x"+hash_string
#message = input("message>")

#hash(message)
