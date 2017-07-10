<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "amajon";
$connectdb = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$connectdb) {
  die("Koneksi ke database gagal - ".mysqli_connect_errno()."<br>".mysli_connect_error());
}
?>
