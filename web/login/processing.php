<?php
session_start();

$dbUrl = getenv('DATABASE_URL');

if (empty($dbUrl)) {
 // example localhost configuration URL with postgres username and a database called cs313db
 $dbUrl = "postgres://postgres:password@localhost:5432/login";
}

$dbopts = parse_url($dbUrl);

print "<p>$dbUrl</p>\n\n";

$dbUser = 'postgres';
$dbPassword = 'hoitoru123';
$dbName = 'login';
$dbHost = 'localhost';
$dbPort = '5432';

$uname = $_POST['uname'];
$pass = $_POST['pass'];
$uid;

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

	//Username validation
	$statement = $db->query("SELECT id, username, password FROM users WHERE username= '$uname'");

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		if($pass != $row['pass'])
		{
			header("location:indexerror.php");
		}
		$_SESSION["pass"] = $row['password'];
		$uid = $row['id'];		
	}

	$statement = $db->prepare("SELECT * FROM name WHERE user_id = $uid");
	$statement->execute();

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$_SESSION["first"] = $row['first'];
		$_SESSION["last"] = $row['last'];
	}

	$statement = $db->prepare("SELECT * FROM phone WHERE user_id = $uid");
	$statement->execute();

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$_SESSION["pnumber"] = $row['pnumber'];
	}

	$statement = $db->prepare("SELECT * FROM address WHERE user_id = $uid");
	$statement->execute();

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$_SESSION['snumber'] = $row['snumber'];
		$_SESSION['sname'] = $row['sname'];
		$_SESSION['city'] = $row['city'];
		$_SESSION['state'] = $row['state'];
		$_SESSION['country'] = $row['country'];
		$_SESSION['zip'] = $row['zip'];
	}

header("location:profile.php");
?>
</body>
</html>
