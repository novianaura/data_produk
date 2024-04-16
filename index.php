<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PRODUK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">DATA PRODUK</h1>
        <a href="input.php" class="btn btn-success mb-3">Tambah Data</a>
        <table class="table table-bordered text-center">
            <thead class="thead-light">
                <tr class="">
                    <th>Id Produk</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $no = 1;
                $select = mysqli_query($koneksi, "SELECT * FROM tbl_produk");
                if (mysqli_num_rows($select) > 0) {
                    while ($hasil = mysqli_fetch_array($select)) {
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $hasil['nama_produk'] ?></td>
                            <td><?php echo $hasil['kategori'] ?></td>
                            <td><?php echo $hasil['keterangan'] ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $hasil['id_produk'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete.php?id=<?php echo $hasil['id_produk'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="5" class="text-center">Data Kosong</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>