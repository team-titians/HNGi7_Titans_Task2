from __future__ import print_function
# just to be backward compatible with python 2, doesn't affect python 3


def introduction(info):
    text = print(
        "Hello World, this is {name} with HNGi7 ID {hngi7_id} and email {email} using {language} for stage 2 task".format(
            **my_info
        )
    )

    return text


my_info = {
    "name": "Arbaaz Khan",
    "hngi7_id": "HNG-00574",
    "email": "crispyzingy@gmail.com",
    "language": "Python",
}

introduction(my_info)
