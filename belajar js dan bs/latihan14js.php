<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan 14 Javascript : Object (Properti dan Method)</title>
</head>
<body>
	<script type="text/javascript">
		var car = {
			//properti
			type : "Fiat",
			model : "500",
			color : "white",

			//method
			start : function(){
				console.log("ini method start");
			},

			drive : function(){
				console.log("ini method drive");
			},

			brake : function(){
				console.log("ini method brake");
			},

			stop : function(){
				console.log("ini method stop");
			}
		};

		console.log(car.type);
		console.log(car.color);

		car.start();
		car.stop();
	</script>
</body>
</html>