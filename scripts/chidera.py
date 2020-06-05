"""def main(name,Hngid,email):
	#name = "Ikeogu Franklin Chidera"
	#Hngid = "HNG-00944"
	#email = "ikeogufranklin1@gmail.com"
	message = f"Hello World, this is {name} with HNGi7 ID {Hngid} and email {email} using python for stage2 task"

	return message


print("Hello World,this is Ikeogu Franklin Chidera with HNGi7 ID HNG-00944 and email ikeogufranklin1@gmail.com using python for stage 2 task")"""
def main(my_hng_info):
	message = print("Hello World,this is {} with HNGi7 ID {} and email {} using {} for stage 2 task".format(*my_hng_info))

	return message

my_info = ["Ikeogu Franklin Chidera","HNG-00944","ikeogufranklin1@gmail.com","Python"]
main(my_info)