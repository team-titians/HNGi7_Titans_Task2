
  let details = {
    fname: "Jerry Hogan",
    id: "HNG-01701",
    language: "JavaScript",
    email: "damilolajerryhd@gmail.com"
  }

  const intro = (datas) =>{
        let { fname, id, language, email } = datas;

        let introduction = `Hello World, this is ${fname} with HNGi7 ID ${id} and email ${email} using ${language} for stage 2 task`;

        return introduction;
    }

  console.log(intro(details));
