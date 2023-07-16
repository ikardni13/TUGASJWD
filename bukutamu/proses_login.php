<?php
// proses_login.php

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh validasi sederhana
    if ($username === 'admin' && $password === '123456') {
        // Login berhasil, redirect ke halaman selamat
        header('Location: selamat.php');
        exit;
    } else {
        // Login gagal, tampilkan pesan error
        echo "Username atau password salah.";
    }
}
?>
