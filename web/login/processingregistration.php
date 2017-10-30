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

$uname = $_POST['newuname'];
$pass = $_POST['newpass'];
$fname = $_POST['newfname'];
$lname = $_POST['newlname'];
$pnum = $_POST['newpnumber'];
$snum = $_POST['newsnumber'];
$sname = $_POST['newsname'];
$city = $_POST['newcity'];
$state = $_POST['newstate'];
$country = $_POST['newcountry'];
$zip = $_POST['newzip'];


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

	
	$query = 'INSERT INTO users(username, password) VALUES(:username, :password)';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $uname);
	$statement->bindValue(':password', $pass);

	$statement->execute();
	$userId = $db->lastInsertId("users_id_seq");
	

	$query = 'INSERT INTO name(first, last, user_id) VALUES(:first, :last, :user_id)';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':first', $fname);
	$statement->bindValue(':last', $lname);
	$statement->bindValue(':user_id', $userId);
	$statement->execute();

	$query = 'INSERT INTO phone(pnumber, user_id) VALUES(:pnumber, :user_id)';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':pnumber', $pnum);
	$statement->bindValue(':user_id', $userId);
	$statement->execute();

	$query = 'INSERT INTO address(snumber, sname, city, state, country, zip, user_id) VALUES(:snumber, :sname, :city, :state, :country, :zip, :user_id)';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':snumber', $snum);
	$statement->bindValue(':sname', $sname);
	$statement->bindValue(':city', $city);
	$statement->bindValue(':state', $state);
	$statement->bindValue(':country', $country);
	$statement->bindValue(':zip', $zip);
	$statement->bindValue(':user_id', $userId);
	$statement->execute();



header("location:index.php");
?>
</body>
</html>
