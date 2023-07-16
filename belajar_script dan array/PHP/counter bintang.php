<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perulangan Bintang</title>
</head>
<body>
	<script type="text/javascript">
		var ulangi = confirm("Apakah anda ingin mengulang?");
		var counter = 0;
		while (ulangi) {
			counter++;
			var bintang = "*".repeat(counter) + "<br>";
			document.write(counter + ": " + bintang);
			ulangi = confirm("Apakah anda ingin mengulang?");
		}
	</script>
</body>
</html>
