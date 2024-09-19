<?php
$skor = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$jumlahSkor = 0;

foreach($skor as $skr){
    $jumlahSkor += $skr;
}
$tambahan = 0;
if($jumlahSkor > 500){
    $tambahan = 10;
    $jumlahSkor += $tambahan;
}
echo "Total Skor pemain adalah: $jumlahSkor";
echo "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan?";
echo "<br>";
if($tambahan>0){
    echo "ya";
}else{
    echo "tidak";
}

?>