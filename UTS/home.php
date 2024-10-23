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
    <link rel="stylesheet" href="home1.css" />

  
  </head>
  <body>
    <div class="container">
      <div class="gambar1">
        <nav class="navbar1">
          <a class="logo" href="#"></a>
          <div class="list1">
            <ul>
              <li><a href="#">HOME</a></li>
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
            <h1>Let's Eat</h1>
            <h3>Experience new italian Nomero Uno</h3>
            <form class="form">
              <button class="play"><a href="order.php">ORDER</a></button>
            </form>
          </div>
        </div>
      </div>
    </div>
      <script>  
      </script>
  </body>
</html>
