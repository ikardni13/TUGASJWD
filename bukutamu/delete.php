<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "bukutamu");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Periksa apakah parameter id tersedia
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data tamu berdasarkan id
    $sql = "DELETE FROM tamu2 WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Data tamu berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Tutup koneksi
mysqli_close($conn);
?>
