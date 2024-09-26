<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);

foreach($nilaiSiswa as $nilai){
    echo "$nilai ";
}
echo "<br>";
$jumlahNilai = 0;
for($i = 2; $i < count($nilaiSiswa)-2; $i++){
    $jumlahNilai += $nilaiSiswa[$i];
}
echo "Jumlah nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah: $jumlahNilai";
$rataNilai = $jumlahNilai / 6;
echo "<br>";
echo "Rata-rata nilai: $rataNilai";
?>