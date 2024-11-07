<?php
    include 'db_connection.php';
    $id = $_GET["id"];

      if ($_SERVER["REQUEST_METHOD"] === "POST") {
          $namaBarang = $_POST['barang'];
          $jenisBarang = $_POST['jenis'];
          $kodeBarang = $_POST['kode'];
          $hargaBarang = $_POST['harga'];
          $stokBarang = $_POST['stok'];
  
          $sql = "UPDATE Barang SET nama_barang = '$namaBarang', jenis_barang = '$jenisBarang', kode_barang = '$kodeBarang', 
          harga_barang = '$hargaBarang', stok_barang = '$stokBarang' WHERE id = '$id'";
          
          $result = sqlsrv_query($conn, $sql);
  
          if ($result) {
              header("Location: view_barang.php"); 
              exit;
          } else {
              die(print_r(sqlsrv_errors(), true));
          }
      }
?>

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
    <h2>Edit Barang</h2>
    <?php
            $sql = "SELECT * FROM Barang WHERE id = '$id'";
            $result = sqlsrv_query($conn, $sql);
            $row = sqlsrv_fetch_array($result);
            // kode tersebut mengambil data per baris dari semua baris tabel
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $id; ?>" method="post">
        <label for="barang">Nama Barang:</label>
        <input type="text" name="barang" value="<?php echo htmlspecialchars($row['nama_barang']); ?>" required/><br /><br />

        <label for="jenis">Jenis Barang:</label>
        <input type="text" name="jenis" value="<?php echo htmlspecialchars($row['jenis_barang']); ?>" required/><br /><br />

        <label for="kode">Kode Barang:</label>
        <input type="text" name="kode" value="<?php echo htmlspecialchars($row['kode_barang']); ?>" required/><br /><br />

        <label for="harga">Harga Barang:</label>
        <input type="number" name="harga" value="<?php echo htmlspecialchars($row['harga_barang']); ?>" required/><br /><br />

        <label for="stok">Stok Barang:</label>
        <input type="number" name="stok" value="<?php echo htmlspecialchars($row['stok_barang']); ?>" required/><br /><br />

        <button type="submit" name="submit">Update</button>
    </form>
</div>
  </body>
</html>
