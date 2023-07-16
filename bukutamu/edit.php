<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "bukutamu");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Periksa apakah parameter name tersedia
if (isset($_GET['name'])) {
    $name = $_GET['name'];

    // Escape nilai name untuk mencegah SQL injection
    $escapedName = mysqli_real_escape_string($conn, $name);

    // Query untuk mendapatkan data tamu berdasarkan name
    $sql = "SELECT * FROM tamu2 WHERE name='$escapedName'";
    $result = mysqli_query($conn, $sql);

    // Periksa apakah data tamu ditemukan
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Tampilkan form edit dengan data tamu yang ditemukan
        echo "<h2>Edit Tamu</h2>";
        echo "<form method='post' action='update.php'>";
        echo "<input type='hidden' name='name' value='" . $row['name'] . "'>";
        echo "<label for='name'>Nama:</label>";
        echo "<input type='text' id='name' name='name' value='" . $row['name'] . "' required><br><br>";
        echo "<label for='email'>Email:</label>";
        echo "<input type='email' id='email' name='email' value='" . $row['email'] . "' required><br><br>";
        echo "<label for='mobile'>Mobile:</label>";
        echo "<input type='tel' id='mobile' name='mobile' value='" . $row['mobile'] . "' required><br><br>";
        echo "<input type='submit' value='Update'>";
        echo "</form>";
    } else {
        echo "Data tamu tidak ditemukan.";
    }
}

// Tutup koneksi
mysqli_close($conn);
?>
