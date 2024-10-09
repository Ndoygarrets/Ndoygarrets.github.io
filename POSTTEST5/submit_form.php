<?php
// Menghubungkan ke database
$host = 'localhost'; // Ganti sesuai dengan host database Anda
$db = 'dbkritsar'; // Ganti dengan nama database Anda
$user = 'root'; // Ganti dengan username database Anda
$pass = ''; // Ganti dengan password database Anda

// Buat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $age = htmlspecialchars($_POST['age']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing password untuk keamanan
    $kritikSaran = isset($_POST['kritikSaran']) ? htmlspecialchars($_POST['kritikSaran']) : '';

    // Query untuk menyimpan data
    $sql = "INSERT INTO kritik_saran (nama, umur, password, kritiksaran) VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siss", $nama, $umur, $password, $kritikSaran);

    if ($stmt->execute()) {
        echo "Kritik dan saran berhasil disimpan.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
