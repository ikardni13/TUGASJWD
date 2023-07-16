<!DOCTYPE html>
<html>
<head>
  <title>Show Barang</title>
  <script>
    var dataBarang = [
      "Buku Tulis",
      "Pensil",
      "Spidol"
    ];

    function showBarang() {
      var listBarang = document.getElementById("list-barang");
      // clear list barang
      listBarang.innerHTML = "";

      // cetak semua barang
      for (let i = 0; i < dataBarang.length; i++) {
        var btnEdit = "<a href='#' onclick='editBarang(" + i + ")'>Edit</a>";
        var btnHapus = "<a href='#' onclick='deleteBarang(" + i + ")'>Hapus</a>";
        listBarang.innerHTML += "<li>" + dataBarang[i] + " [" + btnEdit + " | " + btnHapus + "]</li>";
      }
    }

    function addBarang() {
      var input = document.querySelector("input[name=barang]");
      dataBarang.push(input.value);
      showBarang();
    }

    function editBarang(id) {
      var newBarang = prompt("Nama baru", dataBarang[id]);
      if (newBarang !== null) {
        dataBarang[id] = newBarang;
        showBarang();
      }
    }

    function deleteBarang(id) {
      dataBarang.splice(id, 1);
      showBarang();
    }
  </script>
</head>
<body>
  <ul id="list-barang"></ul>
  <input type="text" name="barang">
  <button onclick="addBarang()">Tambah Barang</button>

  <script>
    showBarang();
  </script>
</body>
</html>
