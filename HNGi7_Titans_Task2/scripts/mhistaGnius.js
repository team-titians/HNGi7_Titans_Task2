var person = {
    name:  'Tochukwu Ekeocha',
    HNG_ID: 'HNG-03882',
    email: 'ekeochatochukwu90@gmail.com',
    slack_id: 'Mhista_Gnius',
    language: 'javascript'
  };

  function personinfo(person){
   return "Hello World, this is "+person.name+ " with HNGi7 ID " + person.HNG_ID + " and email " + person.email+ " using "+ person.language+" for stage 2 task";
  }


  console.log(personinfo(person));