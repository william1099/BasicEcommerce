<?php
include("session.php");
include("connect.php");
if (isset($_POST["submit"])) {
  $val =  $_POST["textarea1"];
  $query = "INSERT INTO chat VALUES('$val')";
  $result = mysqli_query($connectdb, $query);
  if ($_POST["textarea1"] == "nama") {
    $query = "INSERT INTO chat VALUES('Namaku Amajon BOT :)')";
  }
  else if ($_POST["textarea1"] == "tanggal") {
    $jam = Date('d m Y');
    $query = "INSERT INTO chat VALUES('$jam')";
  }
  else if ($_POST["textarea1"] == "bye") {
    $query = "INSERT INTO chat VALUES('bye :( ')";
  }
  else if ($_POST["textarea1"] == "oi" || $_POST["textarea1"] == "gan" || $_POST["textarea1"] == "bot" || $_POST["textarea1"] == "amajon" || $_POST["textarea1"] == "woi") {
    $query = "INSERT INTO chat VALUES('kenapa manggil-manggil ? ')";
  }
  $result = mysqli_query($connectdb, $query);
}
 ?>
<html>
<head>
  <script type="text/javascript" src="amajon.js"></script>
<title>Amajon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width , initial-scale= 1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link type="text/css" rel="stylesheet" href="amajoncss.css" />
</head>
<body>
<div class="container-fluid">

  <div class="jumbotron">
  	<h1> Amajon.com</h1>
  	<p>Tempat Jual Beli Aman dan Terpercaya</p>
  	<form action="tampil.php" role="form" method="post" class="form-inline" >
  		<div class="input-group">
  			<input name="nama" type="name" class="form-control" placeholder="Cari barangnya disini gan" size="50">
  		<div class="input-group-btn">
  			<button class="btn btn-danger" type="submit" name="submit" value="submit">Cari</button>
  		</div>
  		</div>
    </form>
      <?php
      if (!isset($_SESSION["username"])) {
          echo "<p style='text-align:center; display:inline-block' onclick='kelogin()'>Login &nbsp; |</p>
          <p style='text-align:center; display:inline-block' onclick='kedaftar()'>&nbsp; Daftar</p>";
      }
      else {
          echo "<p style='text-align:center; display:inline-block'>Selamat Datang ";
          echo $usr;
          echo "!&nbsp; |</p><p style='text-align:center; display:inline-block' onclick='kelogout()'>&nbsp; Keluar</p>";
      }
      ?>
  	</div>
  </div>
  <hr>
  <center><h3>Chat Box</h3></center>
  <div style="background-color:#e5e7e8">
    <table align="center" style="font-size:30px;width:1100px; height:50px;" class="table table-bordered">
    <?php
  $query = "SELECT * FROM chat";
  if (!isset($_SESSION["username"])) $us = "Unknown";
  else $us = $_SESSION["username"];
  $result = mysqli_query($connectdb, $query);
  $cnt = count(mysqli_fetch_assoc($result));
  while ($data = mysqli_fetch_assoc($result)) {
    echo "<div><tr style='background-color:white;height:100px;";
    if ($cnt % 2 == 0) {echo "color:red;";   echo "'><td><b>Amajon BOT : "; }
    else if ($cnt % 2 == 1) {echo "color:orange;"; echo "'><td><b>"; echo "$us : "; }
    echo $data["chat"];
    echo "</b></td></tr></div>";
    $cnt++;
  }
    ?>
  </table>
  </div>
  <hr>
  <center><h3>Komentar : </h3></center>
  <form name="form1" action="chat.php" method="post">
  <center><textarea cols="160" rows="7" name="textarea1" value="Ketik komentar disini..."></textarea></center>
  <center><input style="width:100px; height:70px; background-color:orange; color:white;" type="submit" name="submit" value="Kirim"></input></center>
</form>
  <div class="footer">
  	<div class="pagination">
  		<a href="#">&laquo;</a>
  		<a class="active" href="#">1</a>
  		<a href="#">2</a>
  		<a href="#">3</a>
  		<a href="#">&raquo;</a>
  	</div>
  	<p>&copy; 2017 |  Theme by William </p>
  </div>
  </body>
  </html>
