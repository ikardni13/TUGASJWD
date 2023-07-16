<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "bukutamu");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Periksa apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Query untuk menyimpan data tamu ke dalam tabel tamu2
    $sql = "INSERT INTO tamu2 (name, email, mobile) VALUES ('$name', '$email', '$mobile')";

    if (mysqli_query($conn, $sql)) {
        echo "Data tamu berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Tutup koneksi
mysqli_close($conn);
?>
