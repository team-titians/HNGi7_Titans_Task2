// Script to return data based on this format: Hello World, this is [Your full name] with HNGi7 ID [Your HNG ID] and [email] using [language Used] for stage 2 task

const data = {
  name: "Duruaku Charles",
  id: "HNG-05100",
  language: "JavaScript",
  email: "charlesrichson@gmail.com"
};

const returnedData = `Hello World, this is ${data.name} with HNGi7 ID ${data.id} and email ${data.email} using ${data.language} for stage 2 task`;

console.log(returnedData);
