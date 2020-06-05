def stage_2_task(data):
    return_string = "Hello World, this is {} with HNGi7 ID {} and email {} using {} for stage 2 task"
    return(return_string.format(data['name'], data['id'], data['email'], data['language']))


if __name__ == '__main__':

    details = {"name": "Ikejiaku Divine",
               "id": "HNG-05205",
               "email": "divineikejiaku@gmail.com",
               "language": "python",
               }

    print(stage_2_task(details))
