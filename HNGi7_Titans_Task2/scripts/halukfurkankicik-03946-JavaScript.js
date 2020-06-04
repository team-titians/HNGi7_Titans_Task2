
// Personal info
const intern = {
  _fullName: 'Haluk Furkan KICIK',
  _hngId: 'HNG-03946',
  _preferredLang: 'JavaScript',
  _email: 'f.halukkicik@gmail.com',
  meetIntern() {
    console.log(`Hello World, this is ${this._fullName} with HNGi7 ID ${this._hngId} and email ${this._email} using ${this._preferredLang} for stage 2 task`);
  }
};


intern.meetIntern();