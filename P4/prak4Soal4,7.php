<?php
$hargaProduk = 120000;

$hargaYgDibayar = 0;
if($hargaProduk >100000){
    $hargaYgDibayar = $hargaProduk - ($hargaProduk * 0.2);
}else{
    $hargaYgDibayar = $hargaProduk;
}
echo "Harga yang dibayar: $hargaYgDibayar";
?>