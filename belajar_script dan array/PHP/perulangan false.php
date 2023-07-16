<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perulangan false</title>
</head>
<body>
	<script type="text/javascript">
		var ulangi = confirm("Apakah anda mau mengulang?");
		var counter = 0;
		while (ulangi) {
			var jawab = confirm("Apakah anda mau mengulang?");
			counter++;
			if (!jawab) {
				ulangi = false;
			}
		}
		document.write("Perulangan sudah dilakukan sebanyak " + counter + " kali");
	</script>
</body>
</html>