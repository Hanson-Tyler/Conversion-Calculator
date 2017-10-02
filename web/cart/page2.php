<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
                     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <base href="https://aqueous-oasis-32371.herokuapp.com/cart/">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CS 213 Week 07 Ponder and Prove</title>
    <link href="cart.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="cart.js?_&amp;d2lSessionVal=kU8r1uIwetqXoBqWnZPboOoDr"></script>
  
  </head>
  
<body>
	<?php
  echo "<form>";
  if(count($_SESSION["picked"]) == 0){
    echo "<p>Your Cart Is Empty. Cannot Continue With Order</p>" . PHP_EOL;
    echo "<input type=\"button\" value=\"More Shopping\" onclick=\"window.location.href='http://localhost/cart/page1.php'\">";
  }

  else{
    $count = 1;
    echo "<pre> Your Cart: \n </pre>";
    foreach($_SESSION["picked"] as $value){
      echo "Item $count: $value </br>";
      $count++;
    }
    echo "<input type=\"button\" value=\"More Shopping\" onclick=\"window.location.href='http://localhost/cart/page1.php'\">";
    echo "<input type=\"button\" value=\"Continue Order\" onclick=\"window.location.href='http://localhost/cart/page3.php'\">";
  }
echo "</form>";
	?>
</body>
</html>