<?php
include 'config.php';
$data_edit = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk = '" . $_GET['id'] . "' ");
$result = mysqli_fetch_array($data_edit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 20px;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .batal {
            padding: 0.4% 0.8%;
            background-color: #dc3545;
            color: #fff;
            border-radius: 2px;
            text-decoration: none;
        }

        .simpan {
            padding: 0.4% 0.8%;
            background-color: #28a745;
            color: #fff;
            border-radius: 2px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>UPDATE DATA</h1>
        <a href="index.php" class="btn btn-success mb-3 text-center">Data Produk</a>
        <form action="" method="POST">

            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" class="form-control" name="nama_produk" value="<?php echo $result['nama_produk'] ?>" placeholder="Nama Produk" required>
            </div>

            <div class="form-group">
                <label>Kategori:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="kategori" value="Makanan" id="makanan" <?php echo ($result['kategori'] == 'Makanan') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="makanan">Makanan</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="kategori" value="Minuman" id="minuman" <?php echo ($result['kategori'] == 'Minuman') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="minuman">Minuman</label>
                </div>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea class="form-control" name="keterangan" cols="30" rows="2"><?php echo $result['keterangan'] ?> </textarea>
            </div>

            <div class="form-group">
                <a href="index.php" class="btn btn-danger batal">Batal</a>
                <input type="submit" class="btn btn-success simpan" name="edit" value="Simpan">
            </div>
        </form>

        <?php
        include 'config.php';
        if (isset($_POST['edit'])) {
            $update = mysqli_query($koneksi, "UPDATE tbl_produk SET
        id_produk = '" . $_POST['id'] . "',
        nama_produk = '" . $_POST['nama_produk'] . "',
        kategori = '" . $_POST['kategori'] . "',
        keterangan = '" . $_POST['keterangan'] . "'
        WHERE id_produk = '" . $_GET['id'] . "'");
            if ($update) {
                echo "Berhasil diedit";
            } else {
                echo "Gagal Edit";
            }
            header('Location: index.php');
            exit();
        }
        ?>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
