<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Belajar AJAX dengan JQuery</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
<h1>Load Data</h1>
<pre id="result"></pre>
<script>
$(document).ready(function() {
  $("#result").load("https://api.github.com/users/petanikode");
});
</script>
</body>
</html>
