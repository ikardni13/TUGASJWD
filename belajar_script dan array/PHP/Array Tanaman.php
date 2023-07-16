<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Tanaman</title>
</head>
<body>
	<div id="result"></div>

	<script type="text/javascript">
		var tanaman = ["Padi", "Kacang", "Jagung", "Kedelai"];
		var adaKacang = tanaman.includes("Kacang");
		var adaBayam = tanaman.includes("Bayam");

		var resultDiv = document.getElementById("result");
		resultDiv.innerHTML = "Apakah Kacang ada? " + adaKacang + "<br>" +
							  "Apakah Bayam ada? " + adaBayam;
	</script>
</body>
</html>
