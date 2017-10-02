<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
                     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <base href="C:\Bitnami\wappstack-5.6.31-0\ap\ache2\htdocs\board game page\">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CS 213 Week 07 Ponder and Prove</title>
    <link href="week07.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="week07.js?_&amp;d2lSessionVal=kU8r1uIwetqXoBqWnZPboOoDr"></script>
  
  </head>
  
<body>
	<?php
		foreach($_SESSION["picked"] as $value)
		{
			echo "The clicked is " . $value "<br/>";
		}
	?>
</body>
</html>