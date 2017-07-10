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


<div class="layout1">
	<div class="navbar">
		<ul>
			<li><a class="active" href="amajon.php">Home</a></li>
			<li><a href="promo.php">Promo</a></li>
			<li><a href="best.php">Best Seller</a></li>
			<li><a href="add.php">Barang saya</a></li>
			<li><a href="akun.php">Akun</a></li>
			<li><a href="chat.php">AmajonBOT</a></li>
			<li><a class="active b" href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
		<ul>
	</div>
  <div class="sidebar">
		<ul>
			<li><a class="active">Kategori</a></li>
      <li><a href="amajon.php">Pakaian</a></li>
			<li><a href="phone.php">Gadget dan Komputer</a></li>
			<li><a href="perabot.php">Furniture</a></li>
			<li><a href="hobby.php">Hobby</a></li>
			<li><a href="mobil.php">Mobil</a></li>
			<li><a href="sepatu.php">Sepatu</a></li>
			<li><a href="sport.php">Sport</a></li>
      <li><a href="amajon.php">Pakaian</a></li>
		   <li><a href="hobby.php">Hobby</a></li>
			<li><a href="perabot.php">Furniture</a></li>
			<li><a href="mobil.php">Mobil</a></li>
		</ul>
	</div>
</div>
<div class="content">
	<?php
  include("carousel.html");
$query = "SELECT * FROM phone";
$result = mysqli_query($connectdb, $query);
while ($data = mysqli_fetch_assoc($result)) {
  ?>
  <form action="cart.php" method="post">
  <div class="product ">
    <?php
     $namaa = strtoupper($data["nama"]);
     $hargaa = $data["harga"];
     $linkk = $data["link"];
     ?>
    <a href="#" onclick="tabbaru('detail.php?nama=<?php echo $namaa; ?>&harga=<?php echo $hargaa; ?>&link=img/<?php echo $linkk; ?>')" class="productimg"><img src="img/<?php echo $data["link"]; ?> "></a>
    <a href="#" class="productdesc"><?php echo $data["nama"]; ?></a>
    <div class="harga">Rp. <?php echo $data["harga"]; ?></div>
      <input  type="hidden" name="num" value="<?php echo $data["num"]; ?>"></input>
      <input  type="hidden" name="nama" value="<?php echo $data["nama"]; ?>"></input>
        <input  type="hidden" name="harga" value="<?php echo $data["harga"]; ?>"></input>
          <input  type="hidden" name="link" value="<?php echo $data["link"]; ?>"></input>
    <input title="tombol" type="submit" name="cart" value="Beli Sekarang Juga "></input>
    <span class="tag">New</span>
  </div>
</form>
  <?php
}
?>
</div>
<div style="clear:both"></div>
<div style="clear:both"></div>

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
