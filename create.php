<?php
// Menghubungkan ke database
$conn = new mysqli("localhost", "root", "", "db_karyawan");

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];

// Query untuk menambahkan data
$sql = "INSERT INTO karyawan (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
// $conn->close();
?>
