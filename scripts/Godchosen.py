try:
    def helloMessage(mylist):
        message = print(
            "Hello World, this is {0} with HNGi7 ID {1} and email {2} using {3} for stage 2 task".format(*mylist))

        return message

    my_hngi7_information = ["Osazee Odigie",
                            "HNG-03472", "osazee.odigie01@gmail.com", "Python"]

    helloMessage(my_hngi7_information)

except:
    TypeError(
        print("Please, provide the function with the a list of your HNGi7 details."))
