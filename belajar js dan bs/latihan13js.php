<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Latihan 13 Javascript
	</title>
</head>
<body>
	<script type="text/javascript">
		//membuat array
		// var products = ["Senter","Radio","Antena","Obeng"];
		// document.write("<ol>");
		// //mengambil data
		// // document.write(products[1]);
		// for(let i = 0; i < products.length; i++){
		// 	document.write(`<li>${products[i]}</li>`);
		// }
		// document.write("</ol>");

		// var buah = ["Apel","Jeruk","Manggis"];

		// // buah[3] = "Semangka";

		// // for(let i = 0; i < buah.length; i++){
		// // 	document.write(`<li>${buah[i]}</li>`);
		// // }

		// buah.push("Semangka");

		// // buah.shift();

		// buah[0] = "Belimbing";

		// document.write(buah);


		// function sayHello(){
		// 	console.log("Hello World");
		// }

		// sayHello();

		// var sayHello = () => alert("Hello World");

		// function kali(a,b){
		// 	hasilkali = a * b;
		// 	console.log("Hasil kali a*b ="+hasilkali);
		// }

		// kali(3,2);


		function bagi(a,b){
			hasilBagi = a / b;
			return hasilBagi;
		}

		var nilai1 = 20;
		var nilai2 = 5;
		var hasilPembagian = bagi(nilai1,nilai2) + 30;

		document.write(hasilPembagian);
	</script>

	<!-- <a href="#" onclick="sayHello()">Klik Disini</a> -->
</body>
</html>