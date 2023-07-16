<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Costant Angka</title>
</head>
<body>
	<div id="result"></div>

	<script type="text/javascript">
		const angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
		const filteredArray = angka.filter((item) => { return item % 2 === 0; });

		const resultDiv = document.getElementById("result");
		resultDiv.innerHTML = filteredArray.join(", ");
	</script>
</body>
</html>

