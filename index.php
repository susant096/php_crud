<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php
include 'db_connect.php';
$query = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
// $daftars = mysqli_fetch_all($query);
// print_r($daftars);
?>

<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary">Table Daftar</h1>
        <a href="tambah.php" class="btn btn-primary">Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($daftar = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $daftar['nama'] ?></td>
                        <td><?= $daftar['umur'] ?></td>
                        <td><a href="delete.php?id=<?= $daftar['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a> | <a href="edit.php?id=<?= $daftar['id'] ?>">Edit</a></td>
                    </tr>
                <?php
                }
                ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>