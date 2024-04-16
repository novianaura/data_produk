<?php
include 'config.php';
if (isset($_GET['id'])) {
    $delete = mysqli_query($koneksi, "DELETE FROM tbl_produk WHERE id_produk = '" . $_GET['id'] . "' ");
    header('location:index.php');
}
?>