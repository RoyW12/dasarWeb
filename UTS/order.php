<?php
    session_start();

    if (!isset($_SESSION['status']) || $_SESSION['status'] != 'login') {
        header("Location: index.html");
        exit();
    }
    ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="order.css" />
    <script src="../P5/praktik_jquery/jquery-3.7.1.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="gambar1">
        <nav class="navbar1">
          <a class="logo" href="#"></a>
          <div class="list1">
            <ul>
              <li><a href="home.php">HOME</a></li>
            </ul>
          </div>
          <div class="list2">
            <ul>
              <form action="">
                <li><a href="sessionLogout.php">LOG OUT</a></li>
              </form>
            </ul>
          </div>
        </nav>
        <div class="konten">
          <div class="konten-utama">
            <form class="form" id="myForm">
              <label for="noMeja">Nomor Meja:</label><br />
              <input
                type="text"
                id="noMeja"
                name="noMeja"
                required
              /><br /><br />

              <label for="namaMakanan">Nama Makanan:</label><br />
              <input
                type="text"
                id="namaMakanan"
                name="namaMakanan"
                required
              /><br /><br />

              <label for="namaPemesan">Nama Pemesan:</label><br />
              <input
                type="text"
                id="namaPemesan"
                name="namaPemesan"
                required
              /><br /><br />

              <label for="noTelepon">Nomor Telepon:</label><br />
              <input
                type="tel"
                id="noTelepon"
                name="noTelepon"
                required
              /><br /><br />

              <button type="submit">Pesan</button>
            </form>
          </div>
          <div class="konten-kedua">
            <h1>Pesanan</h1>
            <div id="hasil"></div>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function () {
        $("#myForm").submit(function (e) {
          e.preventDefault();
          var formData = $("#myForm").serialize();
          $.ajax({
            url: "prosesOrder.php",
            type: "POST",
            data: formData,
            success: function (response) {
              $("#hasil").html(response);
            },
          });
        });
      });
    </script>
  </body>
</html>
