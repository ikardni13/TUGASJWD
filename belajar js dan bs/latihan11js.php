<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan 11 Javascript : Nested / Percabangan</title>
</head>
<body>
	<script type="text/javascript">
		var username = prompt("Username : ");
		var password = prompt("Password : ");

		// if(username == "Ika"){
		// 	if(password == "123IKA"){
		// 		document.write("<h2>Selamat datang di website kami</h2>");
		// 	}else{
		// 		document.write("<h2>Password salah, silahkan coba lagi</h2>");
		// 	}
		// }else{
		// 	document.write("<h2>Anda tidak terdaftar</h2>");
		// }

		if(username == "IKA" && password == "123IKA"){
			document.write("<h2>Selamat datang di website kami</h2>");
		}else{
			document.write("<h2>Username / password yang Anda masukkan salah</h2>");
		}
	</script>
</body>
</html>