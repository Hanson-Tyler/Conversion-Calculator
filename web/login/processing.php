<?php
session_start();

  $dbUrl = getenv('DATABASE_URL');
  if (empty($dbUrl)) {
    // example localhost configuration URL with postgres username and a database called cs313db
    $dbUrl = "postgres://postgres:090189Tn@localhost:5432/postgres";
  }
  $dbopts = parse_url($dbUrl);
  $dbHost = $dbopts["host"];
  $dbPort = $dbopts["port"];
  $dbUser = $dbopts["user"];
  $dbPassword = $dbopts["pass"];
  $dbName = ltrim($dbopts["path"],'/');
  try {
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $ex) {
    $errorMessage = "There are no quotes to display.";
    include __DIR__ . '/../errors/index.php';
  }


$uname = $_POST['uname'];
$pass = $_POST['pass'];
$_SESSION['uname'] = $uname;
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

	$query = 'SELECT * FROM users';
	$statement = $db->prepare($query);
	$statement->execute();
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		if($row['username'] == $uname)
		{

			header("location:registrationerror.php");
		}
	}

	//Username validation
	$statement = $db->query("SELECT id, username, password FROM users WHERE username= '$uname'");

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo 'password is ' . $pass . 'and the databse password is ' . $row['password'];
		if($pass != $row['password'])
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

$_SESSION["userId"] = $uid;	
header("location:profile.php");
?>
</body>
</html>
