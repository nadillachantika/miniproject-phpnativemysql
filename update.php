<?php

include 'connect.php';

// Mengambil data dari formulir
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

// Query untuk memperbarui data
$sql = "UPDATE karyawan SET name='$name', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index2.php?status=success");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
