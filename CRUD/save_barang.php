<?php
include 'db_connection.php';

if (isset($_POST['barang']) && isset($_POST['kode'])) {
    $namaBarang = $_POST['barang'];
    $jenisBarang = $_POST['jenis'];
    $kodeBarang = $_POST['kode'];
    $hargaBarang = $_POST['harga'];
    $stokBarang = $_POST['stok'];

    $sql = "INSERT INTO Barang (nama_barang,jenis_barang,kode_barang,harga_barang,stok_barang) 
    VALUES ('$namaBarang', '$jenisBarang','$kodeBarang','$hargaBarang','$stokBarang')";

    $result = sqlsrv_query($conn, $sql);
    /*sqlsrv_query() digunakan untuk mengeksekusi query sql; pada parameter pertama berupa koneksi ke database, 
    lalu parameter kedua berupa query sql yang akan dieksekusi*/

    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        header("Location: view_barang.php");
    }
}
?>
