<?php
$pattern = '/[a-z]+/';
$text = 'This is a sample text.';
if(preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan!";
}else{
    echo "Tidak ada huruf kecil!";
}
echo "<br>";
$pattern2 = '/[0-9]+/';
$text2 = 'There are 123 apple.';
if(preg_match($pattern2, $text2,$matches)){
    echo "Cocokkan: " . $matches[0];
}else{
    echo "Tidak ada yang cocok!";
}

echo "<br>";

$pattern3 = '/banana/';
$replacement = 'banana';
$text3 = 'I like apple pie';
$new_text = preg_replace($pattern3,$replacement,$text3);
echo $new_text;

echo "<br>";

$pattern4 = '/go*d/';
$text4 = 'god is good';
if(preg_match($pattern4, $text4,$matches)){
    echo "cocokkan: " . $matches[0];
}else{
    echo "Tidak ada yang cocok!";
}

echo "<br>";
$pattern5 = '/go?d/';
$text5 = 'gooood is good';
if(preg_match($pattern5, $text5,$matches)){
    echo "cocokkan: " . $matches[0];
}else{
    echo "Tidak ada yang cocok!";
}


echo "<br>";

$pattern6 = '/go{0,2}d/';
$text6 = 'gooood is good';
if (preg_match($pattern6, $text6, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}


?>