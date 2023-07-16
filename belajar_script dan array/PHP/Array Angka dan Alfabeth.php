<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Angka dan Alfabeth</title>
</head>
<body>
	<div id="result1"></div>
	<div id="result2"></div>

	<script type="text/javascript">
		var alfabet = ['a', 'f', 'z', 'e', 'r', 'g'];
		var angka = [3, 1, 2, 6, 8, 5];

		var sortedAlfabet = alfabet.sort();
		var sortedAngka = angka.sort();

		var result1Div = document.getElementById("result1");
		result1Div.innerHTML = "Hasil pengurutan alfabet: " + sortedAlfabet.join(", ");

		var result2Div = document.getElementById("result2");
		result2Div.innerHTML = "Hasil pengurutan angka: " + sortedAngka.join(", ");
	</script>
</body>
</html>
