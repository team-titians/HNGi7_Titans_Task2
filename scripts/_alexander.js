// Main Task: 
// "Each one of us will be required to create a file in php, js or python that would output the following 
// "Hello World, this is [Your full name] with HNGi7 ID [Your HNG ID] 
// using [language Used] for stage 2 task".

function identity(fullName, hngId, email, language){
    var introduction = "Hello World, this is "+fullName+
        " with HNGi7 ID "+hngId+" and email "+email+" using "+
        language+" for stage 2 task"
    console.log(introduction);
}

identity("Eluro Alexander", "HNG-04877", "alexeluro@gmail.com", "JavaScript");