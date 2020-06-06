let profile = {
  fullName: 'Ibe Augustine Chiehiura',
  hngID: 'HNG-02557',
  email: 'ibea37@gmail.com',
  lang: 'JavaScript'
}
function intro () {
  return `Hello World, this is ${profile.fullName} with HNGi7 ID ${profile.hngID} and email ${profile.email} using ${profile.lang} for stage 2 task`
}
console.log(intro(profile))
