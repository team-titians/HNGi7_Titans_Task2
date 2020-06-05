/// Declaring my details as variables 
var name = 'Saratu Muazu Bello';
var hng_Id = 'HNG-03989';
var email = 'Sarahembee71@gmail.com';
var language = 'NodeJs';

// Calling out my details to print out as string  
var Sarah = (name, hng_Id, email, language) => {
    return `Hello World, this is ${name} with HNGi7 ID ${hng_Id} and email ${email} using ${language} for stage 2 task`;
};

console.log(Sarah(name, hng_Id, email, language));
