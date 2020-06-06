def introduction(name, ID, Email, language):
    result = "Hello world, this is {} with HNGi7 ID  {} and email {} using {} for stage 2 task"
    return (result.format(name, ID, Email, language))


message = introduction("Ogunsipe Oladolapo", "HNG-00590",
                       "dolapoogunsipe@gmail.com", "python")
print(message)
