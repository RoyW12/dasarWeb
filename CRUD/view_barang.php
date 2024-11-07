<?php
include 'db_connection.php';

$sql = "SELECT * FROM Barang";
$result = sqlsrv_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="view.css" />
  </head>
  <style>
    *{
      font-family:Arial,sans-serif;
    }
    .judul{
      text-align:center;
    }
    th,
td {
  border: 1px solid #ddd;
  text-align: center;
  padding: 10px 20px;
}
    .edit {
  text-decoration: none;
  background-color: rgb(52, 167, 50);
  padding: 5px 10px;
  color: black;
}
.delete {
  text-decoration: none;
  background-color: rgb(143, 28, 44);
  padding: 5px 10px;
  color: black;
}
.edit:hover {
  background-color: rgb(76, 218, 74);
}
.delete:hover {
  background-color: rgb(215, 44, 67);
}
  </style>
  <body>
    <h1 class="judul">Daftar Barang</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Jenis Barang</th>
        <th>Kode Barang</th>
        <th>Harga Barang</th>
        <th>Stok Barang</th>
        <th>Aksi</th>
      </tr>
      <?php while ($row = sqlsrv_fetch_array($result)): ?>
      <!-- kode tersebut mengambil data per baris dari semua baris tabel -->
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nama_barang']; ?></td>
        <td><?php echo $row['jenis_barang']; ?></td>
        <td><?php echo $row['kode_barang']; ?></td>
        <td><?php echo $row['harga_barang']; ?></td>
        <td><?php echo $row['stok_barang']; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $row['id']?>" class="edit">Edit</a>
          <a href="delete.php?id=<?php echo $row['id']?>" class="delete"
            >Delete</a
          >
        </td>
      </tr>
      <?php endwhile; ?>
      <!--  Ketika semua data sudah diambil dan tidak ada lagi
        baris untuk diproses, while loop selesai, dan tabel selesai ditampilkan.  -->
    </table>
  </body>
</html>
