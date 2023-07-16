<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HALO</title>
</head>
<body>
	Menampilkan output ke id hasil-output
	<div id="hasil-output"></div>
</body>
</html>

<script type="text/javascript">
	//membuat object element
	var hasil = document.getElementById("hasil-output");

	//menampilkan output ke elemen hasil
	hasil.innerHTML = "<p>Halloo, saya IKA!</p>";
</script>