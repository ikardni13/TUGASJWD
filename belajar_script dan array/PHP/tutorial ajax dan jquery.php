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
<script>
var url = "https://jsonplaceholder.typicode.com/posts";
var data = {
  title: "Tutorial AJAX dengan JQuery",
  body: "Ini adalah tutorial tentang AJAX",
  userId: 1
};
$.post(url, data, function(response, status) {
  // melakukan sesuatu dengan response di sini
  console.log(response);
});
</script>
</body>
</html>
