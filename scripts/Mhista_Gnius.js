var person = {
    name:  'Tochukwu Ekeocha',
    HNG_ID: 'ID-03882',
    email: 'ekeochatochukwu90@gmail.com',
    slack_id: 'Mhista_Gnius'
  };
  
  function personinfo(person){
   return 'Hello world, this is '+person.name+ ' with HNGi7 ' + person.HNG_ID + ' and email ' + person.email+ 'using javascript for stage 2 task';
  }
  
  console.log(personinfo(person));