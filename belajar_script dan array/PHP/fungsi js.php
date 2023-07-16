<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Belajar Fungsi di Javascript</title>
  <script>
    function addBarang() {
      var input = document.querySelector("input[name=barang]");
      var listBarang = document.getElementById("list-barang");
      var newBarang = input.value;

      // Membuat elemen <li> baru
      var li = document.createElement("li");
      li.textContent = newBarang;

      // Menambahkan elemen <li> ke dalam <ul>
      listBarang.appendChild(li);

      // Mengosongkan input
      input.value = "";
    }
  </script>
</head>
<body>
  <fieldset>
    <legend>Input Form</legend>
    <input type="text" name="barang" placeholder="input nama barang..." /> 
    <input type="button" onclick="addBarang()" value="Tambah" />
  </fieldset>
  <div>
    <ul id="list-barang"></ul>
  </div>
</body>
</html>
