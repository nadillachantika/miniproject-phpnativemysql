<?php

include 'connect.php';

// Query untuk mengambil data
$sql = "SELECT id, name, email FROM karyawan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id='myTable' border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>";
    // Menampilkan data
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 hasil";
}

// Menutup koneksi
$conn->close();
?>
