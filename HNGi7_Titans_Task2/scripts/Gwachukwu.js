//There are easier ways to do this but we were asked to be unique so I used ES6 class
//First declare a class with constructor
class Details {
    constructor(name, id, language, email) {
      (this.name = name),
        (this.id = id),
        (this.language = language),
        (this.email = email);
    }
    // function to output string
    get sayHello() {
      return `Hello World, this is ${this.name} with HNGi7 ID ${this.id} and email ${this.email} using ${this.language} for stage 2 task`;
    }
  }
  // create an instance of Details with values
  const hngDetails = new Details(
    "Gwachukwu Elebeke",
    "HNG-01422",
    "javascript",
    "gwachukwuelebeke@gmail.com"
  );
  //log message to console
  console.log(hngDetails.sayHello);
  