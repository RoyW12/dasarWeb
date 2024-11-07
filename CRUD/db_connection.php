<?php
$serverName = "LAPTOP-TCQ8K2TM";  
$connectionOptions = array(
    "Database" => "Toko",  
    "Uid" => "",  
    "PWD" => ""
);

// Koneksi ke SQL Server
$conn = sqlsrv_connect($serverName, $connectionOptions);
//parameter kedua berupa array yang menampung informasi mengenai database
//parameter pertama berupa nama server
// sqlsrv_connect menghubungkan ke database dan mereturn nilai bool

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>

