const myProfile = (email, language) => {
  let name = "Ganiyu Babatunde";
  let id = "HNG-03586";
  let greeting = "Hello World";
  let stage = 2;
  let message = `${greeting}, this is ${name} with HNGi7 ID ${id} and email ${email} using ${language} for stage ${stage} task`;
  return message;
};
let email = "ganiyubabatunde17@gmail.com";
let language = "JavaScript";
console.log(myProfile(email, language));
