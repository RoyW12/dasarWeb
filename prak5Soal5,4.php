<?php
$nilaiMatematika = [
        ['Alice',85],
        ['Bob',92],
        ['Charlie',78],
        ['David',64],
        ['Eva',90]
    ];
$jumlahNilai = 0;
for($i = 0;$i < count($nilaiMatematika);$i++){
    $jumlahNilai += $nilaiMatematika[$i][1];
}
$rataNilai = $jumlahNilai / count($nilaiMatematika);
echo "Rata rata nilai: $rataNilai <br>";

for($i = 0;$i < count($nilaiMatematika);$i++){
    if($nilaiMatematika[$i][1] > $rataNilai){
        echo "Siswa yang mendapat nilai diatas rata rata adalah: " . $nilaiMatematika[$i][0] .
        " dengan nilai: " . $nilaiMatematika[$i][1] . "<br>";
    }
}
?>