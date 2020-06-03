class MyStageTwoTask:
    def __init__(self, name, id, e_mail):
        self.name = name
        self.id = id
        self.e_mail = e_mail

    def run(self):
        print('run')

myself = MyStageTwoTask('Hassan Olowofela', 'HNG-04626', 'hasbah2009@gmail.com')

print(f"Hello world, this is {myself.name} with {myself.id} and {myself.e_mail} using Python for stage 2 task.")
