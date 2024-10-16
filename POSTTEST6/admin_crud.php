<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin CRUD</title>
    <link rel="stylesheet" href="admin_styles.css"> <!-- Gaya baru -->
</head>
<body>

<h1>Data Kritik dan Saran</h1>

<?php
// READ: Menampilkan data
$sql = "SELECT id, nama, umur, kritiksaran FROM datakritsar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nama</th><th>Umur</th><th>Kritik/Saran</th><th>Aksi</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["umur"] . "</td>";
        echo "<td>" . $row["kritiksaran"] . "</td>";
        echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p class='error'>Belum ada kritik atau saran.</p>";
}

// Close connection
$conn->close();
?>

</body>
</html>
