const miaIntro = (email, language) => {
    let name = "Seriki Ayodele";
    let id = "HNG-00520";
    let greeting = "Hello World";
    let stage = 2;
    let message =`${greeting}, this is ${name} with HNGi7 ID ${id} and email ${email} using ${language} for stage ${stage} task` ;
    return message;
}
let email = "serikiayodele@gmail.com";
let language = "JavaScript";
console.log(miaIntro(email, language));
