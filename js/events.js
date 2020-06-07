// const input = document.querySelectorAll('input');
const img = document.querySelectorAll('.menu');//seleksi tujuan kembliannya Array
for (let i = img.length - 1; i >= 0; i--) { // looping Array
	img[i].addEventListener('click',function(){ // setiap index dikenakan Event yang menjalankan fungsi
		const pesanan = prompt('Masukan Jumlah Pesanan');

		console.log(pesanan);
		// manipulasi Atribut 
		const input = document.querySelectorAll('.input');
		input[i].setAttribute('value',pesanan);
		input[i].setAttribute('name','jumlah');

		// img[i].innerHTML ='<input type=text>';
		

		const judul = document.querySelectorAll('.judul');
		judul[i].setAttribute('name','judul');

	});
}

