<?php
include("session.php");
if(!isset($usr)) header("Location: login.php");
?>
<html>
<head>
<title>Amajon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width , initial-scale= 1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link type="text/css" rel="stylesheet" href="amajoncss.css" />
 <style>
  div.kiri {
    float:left;
    height:600px;
    width:100%;
    background-color:#f1f1f1;
    margin-right:10px;
    position:relative;
  }
  div.kanan {

    background-image:url("img/sampul.jpg");
    border-radius:20px;
    width:1000px;
    height:300px;
    text-align:center;
    position:absolute;
    left:400px;
    bottom:300px;
    font-size:40px;
  }
 </style>
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

	<div class="navbar">
		<ul>
			<li><a class="active" href="amajon.php">Home</a></li>
			<li><a href="promo.php">Promo</a></li>
			<li><a href="#">Best Seller</a></li>
			<li><a href="add.php">Barang saya</a></li>
			<li><a href="akun.php">Akun</a></li>
			<li><a href="chat.php">AmajonBOT</a></li>
			<li><a class="active b" href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
		<ul>
	</div>

<div class="content2">
    <div class="kiri">
      <img src="img/owner.jpeg" style="width:300px; height:300px">
      <?php echo "<h2> Tentang "; echo $usr; echo "</h2>"; ?>
      <p>Toko bersama merupakan salah satu toko online yang berada di amajon.com. Toko bersama dimiliki oleh <?php echo $usr; ?> </p>
      <p>yang sekarang memfokuskan kesehariannya untuk berjualan online. <?php echo $usr; ?> merupakan salah satu penjual terlaris di amajon.com</p>
      <div class="kanan">
        <h2>Toko <?php echo $usr; ?></h2>
        <p>Toko pakaian terbesar di Indonesia </p>
      </div>
    </div>

    <div class="clearfix"></div>
</div>
<div class="footer">
<p>&copy; 2017 |  Theme by William </p>
</div>
</body>
</html>
