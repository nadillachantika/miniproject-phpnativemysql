<?php

include 'connect.php';

// Mengambil data dari formulir

// Mengecek apakah parameter ID sudah diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM karyawan WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect kembali ke halaman utama dengan status sukses
        header("Location: index2.php?status=deleted");
        exit();
    } else {
        // Jika terjadi kesalahan, redirect kembali dengan status error
        header("Location: index2.php?status=error");
        exit();
    }
}
