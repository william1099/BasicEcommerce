<?php
include("connect.php");
include("session.php");
if (isset($_POST["cart"])) {

  $nama = htmlentities(strip_tags(trim($_POST["nama"])));
  $num = htmlentities(strip_tags(trim($_POST["num"])));
  $harga = htmlentities(strip_tags(trim($_POST["harga"])));
  $link = htmlentities(strip_tags(trim($_POST["link"])));

  $nama = mysqli_real_escape_string($connectdb,$nama);
  $num = mysqli_real_escape_string($connectdb,$num);
  $harga = mysqli_real_escape_string($connectdb,$harga);
  $link = mysqli_real_escape_string($connectdb,$link);

  $query = "INSERT INTO cart VALUES ($num, '$nama', '$link', $harga)";
  $result = mysqli_query($connectdb, $query);
  if ($result) echo "Berhasil";
  else echo "GAGAL";

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
 <style>
 button[name="cartdel"] {
   width:100px;
   height:50px;
   background-color:#f4511e;
   color:white;
 }
 table {
   font-weight:bold;
   font-family:verdana;
   text-align:center;
   margin-left:80px;
 }
 td {
   border-bottom:2px solid red;

 }
 th {
   text-align:center;
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
<?php
$query = "SELECT * FROM cart";
$result = mysqli_query($connectdb, $query);
$sum = 0;
?>
<div class="layout1">
	<div class="navbar">
		<ul>
			<li><a class="active" href="amajon.php">Home</a></li>
			<li><a href="promo.php">Promo</a></li>
			<li><a href="best.php">Best Seller</a></li>
			<li><a href="add.php">Barang saya</a></li>
			<li><a href="akun.php">Akun</a></li>
			<li><a href="chat.php">AmajonBOT</a></li>
			<li><a class="active b" href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><span>&emsp;<b><?php echo "(".mysqli_num_rows($result) ." item)"; ?></b></span></a></li>
		<ul>
	</div>
  <div class="content">
    <center>
    <table class="table table-striped">
      <tr style="color:white; background-color:#f4511e;">
        <th>Gambar</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th></th>
      </tr>
      <?php
    while ($data = mysqli_fetch_assoc($result)) {
      $sum += $data["harga"];
      ?>
        <tr>
          <td><img style="width:90px; height:90px;" src="img/<?php echo $data["link"]; ?>"></td>
          <td><?php echo $data["nama"]; ?></td>
          <td style="color:red;">Rp. <?php echo $data["harga"]; ?>,00</td>
          <td>

              <form action="cartdel.php" method="post" >
              <input type="hidden" name="link" value="<?php echo $data["link"]; ?>">
              <button type="submit" name="cartdel" value="hapus">Hapus</button>
              </form>
            </td>
        </tr>

      <?php
    }
    ?>
    <tr>
      <td>Total Barang dan Total Harga</td>
      <td><?php echo mysqli_num_rows($result); ?></td>
      <td>Rp. <?php echo number_format($sum, 2); ?></td>
      <td></td>
    </tr>
  </table></center>
  </div>
<div class="clearfix">
</div>
    <center><button  type="button" name="cartdel" style="width:150px"><b>Beli Sekarang<b></button></center>

  <div class="clearfix"></div>
  <div class="footer">
    <p>&copy; 2017 |  Theme by William </p>
  </div>
  </body>
  </html>
