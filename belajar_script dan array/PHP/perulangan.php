<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perulangan</title>
</head>
<body>
	<script type="text/javascript">

		var ulangi = confirm("Apakah anda mau mengulang?");
		var counter = 0;
		while (ulangi) {
			counter++;
			ulangi = confirm("Apakah anda mau mengulang?");
		}
		document.write("Perulangan sudah dilakukan sebanyak " + counter + " kali");

	</script>
</body>
</html>
