phoenix_dict = {
    "Name": "Precious Evwidonor",
    "HNG_ID": "HNG-04459",
    "Email": "peekube01@gmail.com",
    "Language": "Python"
}
data1 = phoenix_dict.get("Name")
data2 = phoenix_dict.get("HNG_ID")
data3 = phoenix_dict.get("Email")
data4 = phoenix_dict.get("Language")
if "Name" and "HNG_ID" and "Email" and "Language" in phoenix_dict:
    print("Hello World, this is ", data1, " with HNGi7 ID ", data2, " and email ", data3, " and using  ", data4, " for stage 2 task")
#Thank you Jerry Hogan