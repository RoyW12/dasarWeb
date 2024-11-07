<?php
include "db_connection.php";

$id = $_GET["id"];
$sql = "DELETE FROM Barang WHERE id = '$id'";
    $result = sqlsrv_query($conn, $sql);
    
    if ($result) {
        header("Location: view_barang.php");
        exit;  
    } else {
        die(print_r(sqlsrv_errors(), true));
    }


