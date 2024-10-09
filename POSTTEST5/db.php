<?php
$host = 'localhost';
$db = 'dbkritsar'; // Ganti dengan nama database
$user = 'root'; // Ganti dengan username database
$pass = ''; // Ganti dengan password database

// Buat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
