<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $noMeja = $_POST['noMeja'];
    $namaMakanan = $_POST['namaMakanan'];
    $namaPemesan = $_POST['namaPemesan'];
    $noTelepon = $_POST['noTelepon'];

    echo "<p>Nomor Meja: " . htmlspecialchars($noMeja) . "<br>";
    echo "Nama Makanan: " . htmlspecialchars($namaMakanan) . "<br>";
    echo "Nama Pemesan: " . htmlspecialchars($namaPemesan) . "<br>";
    echo "Nomor Telepon: " . htmlspecialchars($noTelepon)."</p>" . "<br>";
}
?>
