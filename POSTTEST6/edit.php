<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM kritik_saran WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    // Tampilkan form edit
    echo '<form method="POST" action="update.php">
            <input type="hidden" name="id" value="' . $row['id'] . '">
            Nama: <input type="text" name="nama" value="' . $row['nama'] . '"><br>
            Umur: <input type="text" name="umur" value="' . $row['umur'] . '"><br>
            Kritik/Saran: <textarea name="kritiksaran">' . $row['kritiksaran'] . '</textarea><br>
            <button type="submit">Update</button>
          </form>';
}

$stmt->close();
$conn->close();
?>
