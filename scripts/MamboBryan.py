class Intern:
    def __init__(self, internName, hngId, email, language):
        self.internName = internName
        self.hngId = hngId
        self.email = email
        self.language = language

    def sayHello(self):
        print(
            "Hello World, this is " + self.internName +
            " with HNGi7 ID " + self.hngId +
            " and email " + self.email +
            " using " + self.language +
            " for stage 2 task"
    )


internBrian = Intern("Brian Odhiambo", "HNG-04122", "mambobryan@gmail.com", "python")
internBrian.sayHello()