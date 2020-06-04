const profiles = [
    {
        fname: 'Emmanuel',
        lname: 'Taiwo',
        language: 'Javascript',
        email: 'taiwoo431@gmail.com',
        Id: 'HNG-03557'
    }
]
profiles.forEach(prof => {
    const profilesOutput =
        `Hello World, this is ${prof.fname} ${prof.lname} with HNGi7 ID ${prof.Id} and email ${prof.email} using ${prof.language} for stage 2 task`
    console.log(profilesOutput);
})