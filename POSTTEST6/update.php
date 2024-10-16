<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = htmlspecialchars($_POST['nama']);
    $umur = htmlspecialchars($_POST['umur']);
    $kritikSaran = htmlspecialchars($_POST['kritiksaran']);

    $sql = "UPDATE kritik_saran SET nama = ?, umur = ?, kritiksaran = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisi", $nama, $umur, $kritikSaran, $id);

    if ($stmt->execute()) {
        echo "Data berhasil diupdate.";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
