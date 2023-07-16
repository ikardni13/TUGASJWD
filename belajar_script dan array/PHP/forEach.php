<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>forEach</title>
</head>
<body>
	<script type="text/javascript">
		var days = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];
		days.forEach((day) => {
			document.write("<p>" + day + "</p>");
		});
	</script>
</body>
</html>
