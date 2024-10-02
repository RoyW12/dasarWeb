<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
function hitungUmur($thn_lahir,$thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo "Umur saya adalah ". hitungUmur(1998,2023). "tahun"
perkenalan("Roy","Hallo");

echo "<hr>";
$saya = "Elok";
$ucapanSalam = "Selamat Pagi";
perkenalan($saya);
?>