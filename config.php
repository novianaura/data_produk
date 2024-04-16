<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_product_pl2";
$koneksi = mysqli_connect($host,$user, $pass, $db);
if (!$koneksi){
    echo "Gagal koneksi database";
} 

?>