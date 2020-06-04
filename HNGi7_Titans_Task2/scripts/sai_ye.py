def main():
    #declare all variiables
    full_name = 'Obakunle Oluseye'
    email = "obakunleoluseye@gmail.com"
    language_used = 'Python'
    hng_id = "HNG-03024"

    #print result
    result = "Hello World, this is %s with HNGi7 ID %s and email %s using  %s  for stage 2 task" % (full_name,hng_id,email,language_used)
    print(result)


#call main
if __name__ == "__main__":
    main()