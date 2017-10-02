<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
                     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CS 213 Week 07 Ponder and Prove</title>
    <link href="cart.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="cart.js?_&amp;d2lSessionVal=kU8r1uIwetqXoBqWnZPboOoDr"></script>
  
  </head>
  
<body>
	<?php
  $first = $_POST["first"];
  $last = $_POST["last"];
  $snumber = $_POST["snumber"];
  $sname = $_POST["sname"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zip = $_POST["zip"];
  $country = $_POST["country"];

  echo "<form>";
    $count = 1;
    echo "<pre> Your Order: \n ";
    foreach($_SESSION["picked"] as $value){
      echo "Item $count: $value \n";
      $count++;
    }
  echo "</pre>";  

  echo "<pre> Shipping to: \n";
  echo "$first $last\n";
  echo "$snumber";
  if(isset($_POST["anumber"]))
  {
    $anumber = $_POST["anumber"];
    echo " $anumber ";
  }
  echo " $sname\n";
  echo "$city, $state $zip $country";
echo "</form>";
	?>
</body>
</html>