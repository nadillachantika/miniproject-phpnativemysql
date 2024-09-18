<?php
include 'connect.php';

// Menulis query untuk mengambil data dari tabel
$sql = "SELECT id,name, email FROM karyawan";
$result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center fw-bold">Form Update Karyawan</h2>

        <div class="card container p-3">

            <!-- Cek apakah ada status success -->
            <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil di-update!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <!-- Form Input Karyawan -->
            <form action="update.php" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="number" class="form-control" id="id" name="id" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>

        </div>


        <!-- Menampilkan Tabel Karyawan -->
        <h2 class="text-center mt-5 mb-4 fw-bold">Daftar Karyawan</h2>
        <div class="card p-3 mb-5 bg-body rounded">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="bg-primary text-white text-center">
                        <tr>
                            <th>ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr class='text-center'>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>
                                <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a> <!-- Link untuk hapus -->
                                </td>
                                
                              </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='2' class='text-center'>Tidak ada data ditemukan</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>