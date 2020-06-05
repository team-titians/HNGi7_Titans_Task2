# This is my task 2 project

def my_info(self):
    return_info = "Hello World, this is {} with HNGi7 ID {} and email {} using {} for stage 2 task"
    return(return_info.format(self['name'], self['id'], self['email'], self['language']))
    
if __name__ == '__main__':
    
    info = {"name": "Hassan Olowofela",
              "id": "HNG-04626",
              "email": "hasbah2009@gmail.com",
              "language": "python",
              }
    
    print(my_info(info))
