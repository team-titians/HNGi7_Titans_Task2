#!/usr/bin/env python
'''This script does stuff'''
# imports go here


def format_string(data):
    return_string = "Hello World, this is {} with HNGi7 ID {} and email {} using {} for stage 2 task"
    return(return_string.format(data['name'], data['id'], data['email'], data['language']))


if __name__ == '__main__':
    
    details = {"name": "Chima Ataman",
              "id": "HNG-00936",
              "email": "ataman.chima@gmail.com",
              "language": "python",
              }
    
    print(format_string(details))
