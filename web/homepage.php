<?php
session_start();

$dbUser = 'ta_user';
$dbPassword = 'ta_pass';
$dbName = 'scriptureretrieval';
$dbHost = 'localhost';
$dbPort = '5432';

try
{
	// Create the PDO connection
	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $ex)
{
	// If this were in production, you would not want to echo
	// the details of the exception.
	echo "Error connecting to DB. Details: $ex";
	die();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h1>Scripture Resources</h1>

<?php

$statement = $db->prepare("SELECT book, chapter, verse, content FROM scripture");
$statement->execute();

// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	echo '<p>';
	echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
	echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
	echo '</p>';
}

?>
</body>
</html>