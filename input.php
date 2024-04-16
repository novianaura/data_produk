<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">TAMBAH DATA</h1><br>
        <a href="index.php" class="btn btn-success mb-3">Data Produk</a>
        <form action="" method="POST" class="mb-3">
        
            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" required>
            </div>

            <div class="form-group">
                <label>Kategori:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="kategori" value="Makanan" id="makanan">
                    <label class="form-check-label" for="makanan">Makanan</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="kategori" value="Minuman" id="minuman">
                    <label class="form-check-label" for="minuman">Minuman</label>
                </div>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="2"></textarea>
            </div>

            <div class="form-group">
                <a href="index.php" class="btn btn-danger batal">Batal</a>
                <input type="submit" class="btn btn-success simpan" name="simpan" value="Simpan">
            </div>
        </form>

        <?php
        include 'config.php';
        if (isset($_POST['simpan'])) {
            $insert = mysqli_query($koneksi, "INSERT INTO tbl_produk VALUES ('" . $_POST['id_produk'] . "','" . $_POST['nama_produk'] . "','" . $_POST['kategori'] . "','" . $_POST['keterangan'] . "')");
            if ($insert) {
                echo 'Berhasil disimpan';
                header('Location: index.php');
                exit();
            } else {
                echo 'Gagal disimpan';
            }
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
