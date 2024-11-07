<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Barang</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h2>Input Barang</h2>
      <form action="save_barang.php" method="post">
        <label for="barang">Nama Barang : </label>
        <input type="text" name="barang" /><br />
        <br />
        <label for="jenis">Jenis Barang : </label>
        <input type="text" name="jenis" /><br /><br />
        <label for="kode">Kode Barang : </label>
        <input type="text" name="kode" /><br /><br />
        <label for="harga">Harga Barang : </label>
        <input type="number" name="harga" /><br /><br />
        <label for="stok">Stok Barang : </label>
        <input type="number" name="stok" /><br /><br />

        <button type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
