<?php
// Konfigurasi database
$servername = "localhost";
$username = "root"; // Default username di Laragon adalah 'root'
$password = "";     // Default password di Laragon kosong
$dbname = "db_office"; // Nama database yang telah dibuat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die($conn->connect_error);
}
// echo "Koneksi berhasil!";

// // Menutup koneksi
// $conn->close();
?>
