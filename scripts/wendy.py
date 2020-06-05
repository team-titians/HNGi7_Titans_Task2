#!/usr/bin/env python3

import json
   
my_details = '''

    {
        "name": "Wendy Munyasi",
        "id": "HNG-02150",
        "language": "Python3"
    }

'''

data = json.loads(my_details)

print("Hello World, this is " + data['name']  +  " with HNGi7 ID " + data['id'] + " using " + data['language'] + " for stage 2 task")
