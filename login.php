<?php
if (isset($_GET["pesan"])) {
  $pesan = $_GET["pesan"];
}
if (isset($_POST["daftar"])) {
  header("Location: daftar.php");
}
if (isset($_POST["submit"])) {

  $username = htmlentities(strip_tags(trim($_POST["username"])));
  $password = htmlentities(strip_tags(trim($_POST["password"])));

  $pesan_error = "";
  if (empty($username)) {
    $pesan_error .= "Username wajib diisi <br>";
  }
  if (empty($password)) {
    $pesan_error .= "Password wajib diisi <br>";
  }

  include ("connect.php");

  $username = mysqli_real_escape_string($connectdb, $username);
  $password = mysqli_real_escape_string($connectdb, $password);

  $query = "SELECT * FROM akun WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($connectdb, $query);

  if (mysqli_num_rows($result) == 0) {
    $pesan_error .= "Username atau Password salah <br>";
  }



  mysqli_close($connectdb);

  if ($pesan_error == "") {
    session_start();
    $_SESSION["username"] = $username;
    header("Location: amajon.php");
  }
}
else {
  $pesan_error = "";
  $username = "";
  $password = "";
}

 ?>
<html>
<head>
  <title>Amajon.com</title>
  <link rel="stylesheet" type="text/css" href="amajoncss.css">
  <style>

    body {
      margin:0; padding:0;
    }
    .footer {
      height:100px;
    }
    body {
      background-image:url("img/login.jpeg");
    }
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
</head>
<body>
  <div class="header"></div>
  <div class="mid">
  <h2 style="text-align:center; background-color:black; color:white;"> Selamat Datang di Amajon.com ! </h2>
  <?php
    if ($pesan_error != "") {
      echo "<div style=\"text-align:center\" class=\"error\">$pesan_error</div>";
    }
   ?>
   <h2 style="text-align:center">Halaman Daftar</h2>
   <center>
   <div style="width:500px">
   <form action="login.php" method="post" style="border:1px solid #ccc">
     <div class="container" style="background-color:white;">
       <label><b>Username</b></label>
       <input type="text" placeholder="Enter Username" name="username" value="<?php echo $username; ?> " >

       <label><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="password" value="<?php echo $password; ?>" >


       <div class="clearfix">
         <button name="daftar" type="submit" value="daftar" class="cancelbtn">Daftar Sekarang</button>
         <button name="submit" value="submit" type="submit" class="signupbtn">Log In</button>
       </div>
     </div>
   </form>
   </div>
  <div class="footer">&copy; Copyright William </div>
</body>
</html>
