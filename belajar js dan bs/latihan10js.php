<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan 10 Javascript : if/else/if</title>
</head>
<body>
	<script type="text/javascript">
		var nilai = prompt("Inputkan nilai akhir");
		var grade = "";

		if(nilai>=90) grade = "A";
		else if(nilai>=80) grade = "B+";
		else if(nilai>=70) grade = "B";
		else if(nilai>=60) grade = "C+";
		else if(nilai>=50) grade = "C";
		else if(nilai>=40) grade = "D";
		else if(nilai>=30) grade = "E";
		else grade = "F";

		document.write(`<p>Grade Anda adalah : ${grade}</p>`);
	</script>
</body>
</html>