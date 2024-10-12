<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="styleTugas.css"/>
    <script> 
        $(document).ready(function(){
        $("#flip").click(function(){
        $("#table").slideToggle("slow");
  });
});
</script>
<style>

#table {
  padding: 50px;
  display: none;

}
</style>
</head>
<body>
    <div class="container">
        <h1 id="flip">CLICK TO SHOW DATABASE</h1>
        <div id="table">
            <table id="panel">
                <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php
            $student = array(
                array("Andi",15,"10A","Malang"),
                array("Siti",16,"10B","Batu"),
                array("Budi",15,"10A","Dinoyo"),
                array("Anton",25,"15A","Dinoyo"),
            );

            for ($row = 0; $row < count($student); $row++) {
                echo "<tr>";
                for ($col = 0; $col < count($student[$row]); $col++) {
                  echo "<td>". $student[$row][$col] ."</td>";
                }
              }
        ?>
    </table>
    <?php
            $rata;
            $jumlah = 0;
            for($i = 0;$i < count($student);$i++){
            $jumlah += $student[$i][1];
            }
            $rata = $jumlah / count($student);
            echo "<h1 id='axs'> Rata-rata Umur Siswa: $rata </h1>"
    ?>
    </div> 

    </div>


</body>
</html>