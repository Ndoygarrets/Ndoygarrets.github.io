<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $age = $conn->real_escape_string($_POST['age']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password for security
    $kritikSaran = $conn->real_escape_string($_POST['kritikSaran']);
    
    $sql = "INSERT INTO table_name (nama, umur, password, kritiksaran) 
            VALUES ('$username', '$age', '$password', '$kritikSaran')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
    