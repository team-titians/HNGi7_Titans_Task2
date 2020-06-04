phoenix_dict = {
    "Name": " the_Phoenix",
    "HNG_ID": "ID-04495",
    "Email": "peekube01@gmail.com",
    "Language": "Python v3",
    "Status": "Pass"
}
data1 = phoenix_dict.get("Name", "")
data2 = phoenix_dict.get("HNG_ID", "")
data3 = phoenix_dict.get("Email", "")
data4 = phoenix_dict.get("Language")
data5 = phoenix_dict.get("Status")
if "Name" and "HNG_ID" and "Email" in phoenix_dict:
    print("Hello, I am ", data1, " with HNG ID", data2, " and email", data3, "and using ", data4, " for stage 2 task.")
    print(data5)
    