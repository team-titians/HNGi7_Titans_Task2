const showDetails = (name, hngId, email, language) => {
    return `Hello World, this is ${name} with HNGi7 ID ${hngId} and email ${email} using ${language} for stage 2 task`;
};

const myName = 'Ugochukwu Ejiogu';
const myHngId = 'HNG-05075';
const myEmail = 'ugobugo2011@gmail.com';
const languageUsed = 'nodejs';

console.log(showDetails(myName, myHngId, myEmail, languageUsed));
