<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Javascript : Variable</title>
	<script type="text/javascript">
		//membuat variable
		var name = "Ika Ardianiningsih";
		var visitorCount = 1000;
		var isActive = true;
		var url = "https://polines.ac.id";

		//menampilkan variable di jendela dialog (alert)
		alert("Selamat datang di website : " + name);

		//menampilkan variable ke dalam HTML
		document.write("Nama situs : "+ name +"<br>");
		document.write("Jumlah Pengunjung : "+ visitorCount +"<br>");
		document.write("Status aktif : "+ isActive +"<br>");
		document.write("Alamat URL : "+ url +"<br>");
	</script>
</head>
<body>
	<?php
	$nama = "Ika";
	$nama2 = "Ardianiningsih";
	$nama_gabung = $nama." ".$nama2;
	echo $nama_gabung;
	?>
</body>
</html>