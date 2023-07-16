<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bunga</title>
</head>
<body>
	<script type="text/javascript">
		var bunga = ["Mawar", "Melati", "Anggrek", "Sakura"];
		bunga.splice(2, 1);
		document.write("Setelah menghapus 'Anggrek': " + bunga.join(", ") + "<br>");

		bunga.splice(1);
		document.write("Setelah menghapus elemen setelah indeks 1: " + bunga.join(", "));
	</script>
</body>
</html>
