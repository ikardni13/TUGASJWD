<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Belajar Objek Javascript</title>
<script>
function Person(firstName, lastName) {
  this.firstName = firstName;
  this.lastName = lastName;
  
  this.showName = function() {
    alert("Nama: " + this.firstName + " " + this.lastName);
  };
}

var person1 = new Person("Muhar", "Dian");
var person2 = new Person("Petani", "Kode");

person1.showName();
document.write("<br>");
person2.showName();
</script>
</head>
<body>
</body>
</html>
