<?php
$nama = $_GET["nama"];
$harga = $_GET["harga"];
$link = $_GET["link"];
?>
<?php
include("connect.php");
include("session.php");
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
<body onload = "iklan()">
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
  <div class ="desc">
    <hr>
    <table align="center" class = "table table-bordered" style="width:1100px;height:500px; text-align:center;">
      <tr>
        <td rowspan = "2" ><img style = "width:400px; height:350px;" src="<?php echo $link; ?>" /><br><br><br>
        </td>
        <td style="width:650px;">
          <h3><?php echo $nama; ?></h3><br>
          <h3 id="hargaa" style="color:red">Harga : <?php echo $harga; ?></h3>
          <form name="form1">
          <p>Total barang belanjaan : <input type="text" size=3 maxlength=3 value="1" onkeypress="ubah('<?php echo $harga; ?>')" name="jumlah"></input></p>
          </form>
        </td>
      </tr>
      <tr >
        <td>Description : <br>
          <?php echo $nama; ?> dijual seharga Rp. <?php echo $harga; ?> menggunakan platform amajon.com.
        </td>
      </tr>
    </table>
    <hr>
    <img src="img/banner1.jpg" style="width:1000px; height:150px;" name="iklan">
  </div>
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
