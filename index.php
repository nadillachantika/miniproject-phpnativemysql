<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Formulir CRUD Sederhana</h1>

    
    <!-- Tabel untuk menampilkan data -->
    <h2>Daftar Pengguna</h2>
    <?php include 'read.php'; ?>

    <!-- Formulir untuk menambah data -->
    <h2>Tambah Data</h2>
    <form action="create.php" method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <input type="submit" value="Tambah">
    </form>


    <!-- Formulir untuk mengupdate data -->
    <h2>Update Data</h2>
    <form action="update.php" method="post">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>
        <br>
        <label for="name">Nama Baru:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email Baru:</label>
        <input type="email" id="email" name="email">
        <br>
        <input type="submit" value="Update">
    </form>

    <!-- Formulir untuk menghapus data -->
    <h2>Hapus Data</h2>
    <form action="delete.php" method="post">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>
        <br>
        <input type="submit" value="Hapus">
    </form>
</body>
</html>
