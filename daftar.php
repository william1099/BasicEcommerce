
<?php
if (isset($_POST["daftar"])) {

  $username = htmlentities(strip_tags(trim($_POST["username"])));
  $password = htmlentities(strip_tags(trim($_POST["password"])));

  include ("connect.php");

  $username = mysqli_real_escape_string($connectdb, $username);
  $password = mysqli_real_escape_string($connectdb, $password);

  $query = "INSERT INTO akun (username,password) VALUES('$username', '$password')";
  $result = mysqli_query($connectdb, $query);

  if ($result) {
    header("Location: login.php");
  }
  else {
	  echo mysqli_error($connectdb);
  }
}
else {
  $username="";
  $password ="";
}
 ?>
<html>
<style>

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}


.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

.container {
    padding: 16px;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<h2 style="text-align:center">Halaman Daftar</h2>
<center>
<div style="width:500px">
<form action="daftar.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username"   value="<?php echo $username; ?>" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"  value="<?php echo $password; ?>" required>


    <div class="clearfix">
      <button type="button" class="cancelbtn">Batal</button>
      <button type="submit" class="signupbtn" name="daftar" value="daftar">Daftar Sekarang</button>
    </div>
  </div>
</form>
</div>
</center>

</body>
</html>
