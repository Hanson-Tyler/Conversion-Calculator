<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$name = $email = $major = $comment = "";
		$name = $_POST["name"];
		$email = $_POST["email"];
		$major = $_POST["major"];
		$comment = $_POST["comment"];
		$continent = $_POST["continent"];
		$continents = array("NA" => "North America", "SA" => "South America", "EU" => "Europe", "AS" => "Asia", "AU" => "Australia", "AF" => "Africa", "AN" => "Antarctica");

		echo "Name: $name <br>";
		echo "Email: <a href='mailto:$email'> Send to: $email</a><br>";
		echo "Major: $major <br>";
		echo "Comments: $comment <br>";
		foreach ($continent as $value){
			echo "Continent: $continents[$value] <br>";
		}

	?>
</body>
</html>