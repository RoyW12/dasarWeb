<?php
$myArray = array();

if(empty($myArray)){
    echo "Array tidak terdefinisi atau kosong.";
}else{
    echo "Array terdefinisi dan tidak kosong.";
}
echo "<br>";

if(empty($nonExistenVar)){
    echo "Variabel tidak terdifinisi atau kosong.";
}else{
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>