<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "bukutamu");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Escape nilai yang diterima dari form
    $escapedName = mysqli_real_escape_string($conn, $name);
    $escapedEmail = mysqli_real_escape_string($conn, $email);
    $escapedMobile = mysqli_real_escape_string($conn, $mobile);

    // Query untuk memperbarui data tamu berdasarkan nama
    $sql = "UPDATE tamu2 SET email='$escapedEmail', mobile='$escapedMobile' WHERE name='$escapedName'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Data tamu berhasil diperbarui.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Tutup koneksi
mysqli_close($conn);
?>
