const name = 'Omoloye oluwatobi';
const id = 'HNG-03114';
const lanuage = 'javascript';
const email = 'tobi-omoloye@yahoo.com';

const output = function(num) {
	if(num % 2=== 0) {
		return 'Hello world, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task';
	} else {
		return null;
	}
}
console.log(output(66));