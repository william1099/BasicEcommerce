<?php

include("connect.php");

if (isset($_POST["cartdel"])) {
  $link = $_POST["link"];
  $query = "DELETE  FROM cart WHERE link='$link'";
  $result = mysqli_query($connectdb, $query);

  if ($result) {
      header("Location: cart.php");
  }
  else echo "GAGAL";
}
?>
