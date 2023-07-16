<?php
// selamat.php

session_start();

// Cek apakah pengguna sudah login
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "Selamat datang, " . $username . "!";
} else {
    // Jika pengguna belum login, redirect ke halaman login
    header('Location: login.php');
    exit();
}
?>
