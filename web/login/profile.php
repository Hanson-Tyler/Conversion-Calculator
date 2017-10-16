<?php 
	session_start();	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
	echo '<form><header>Personal Information </header>';
	echo '<label> First Name: </label>' . $_SESSION["first"] . '<br>';
	echo '<label> Last Name: </label>' . $_SESSION["last"] . '<br>';
	echo '<label> Phone Number: </label>' . $_SESSION["pnumber"] . '<br>';
	echo '<label> Street Number: </label>' . $_SESSION["snumber"] . '<br>';
	echo '<label> Street Name: </label>' . $_SESSION["sname"] . '<br>';
	echo '<label> City: </label>' . $_SESSION["city"] . '<br>';
	echo '<label> State: </label>' . $_SESSION["state"] . '<br>';
	echo '<label> Country: </label>' . $_SESSION["country"] . '<br>';
	echo '<label> Zip: </label>' . $_SESSION["zip"] . '<br>';
	echo '</form>';
?>

</body>
</html>