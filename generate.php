<?php
include("connect.php");

$query = "DROP TABLE IF EXISTS chat";
$result = mysqli_query($connectdb, $query);
if (!$result) {
  die("Query Error : ".mysqli_errno($connectdb)."<br>".mysqli_error($connectdb));
}
else {
  echo"tabel berhasil dihapus <br>";
}

$query = "CREATE TABLE chat(chat text)";
$result = mysqli_query($connectdb, $query);
if (!$result) die("Query ERROR - ".mysqli_errno($connectdb)."<br>".mysqli_error($connectdb));
else echo "tabel akun berhasil dibuat <br>";
$query = "INSERT INTO chat VALUES('Hai :)')";
$result - mysqli_query($connectdb, $query);
if (!$result) die("Query ERROR - ".mysqli_errno($connectdb)."<br>".mysqli_error($connectdb));
else echo "data berhasil ditambah <br>";
/*
$query = "INSERT INTO best VALUES (1,'Toystoryy', 200000,'best1.jpg'), (2,'SepatuFairytaill', 350000,'best2.jpg'), (3,'AmericanBalll',6300000,'best3.png'), (4,'KursiiMaroon',5350000,'best4.jpg' ), (5,'KurrsiKayu',257000,'best5.jpg'), ";
$query .=  " (6,'HighHeelHitam', 1500000,'best6.jpg'), (7,'SepatuSportAdidas', 500000,'best7.jpg'), (8,'BolaWorldCup2014',450000,'best8.jpg'), (9,'DCSuperHero', 50000,'best9.jpg'), (10,'SkyLander',450000,'best10.jpg'), (11,'XiaomiRedmiNote2', 4000000,'best11.jpg'), (12,'SonyXperiaXAUltraPink',2100000,'best12.jpg')";
$result - mysqli_query($connectdb, $query);
if (!$result) die("Query ERROR - ".mysqli_errno($connectdb)."<br>".mysqli_error($connectdb));
else echo "data berhasil ditambah <br>";
*/
?>
