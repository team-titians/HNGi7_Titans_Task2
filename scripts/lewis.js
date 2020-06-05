var person = {
    fullname: "Ofili Lewis",
    hng_id: "HNG-00427",
    email: "ofililewis@gmail.com",
    language: "Golang",
}
​
const say = () => {
    var output = `Hello world, this is ${person.fullname} with HNGi7 ID ${person.hng_id} and email ${person.email} using ${person.language} for stage 2 task`;
    return console.log(output);
}
​
