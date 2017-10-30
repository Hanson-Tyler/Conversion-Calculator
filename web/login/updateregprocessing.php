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
	$uid = $_SESSION["userId"];
	
	$statement = $db->prepare("UPDATE users SET username = '$uname', password = '$pass' WHERE id = '$uid'");
	$statement->execute();

	$statement = $db->prepare("UPDATE phone SET pnumber = '$pnum' WHERE user_id = '$uid'");
	$statement->execute();

	$statement = $db->prepare("UPDATE name SET first = '$fname', last = '$lname' WHERE user_id = '$uid'");
	$statement->execute();

	$statement = $db->prepare("UPDATE address SET snumber = '$snum', sname = '$sname', city = '$city', state = '$state', country = '$country', zip = '$zip' WHERE user_id = '$uid'");
	$statement->execute();

	$_SESSION["first"] = $fname;
	$_SESSION["last"] = $lname;
	$_SESSION["pnumber"] = $pnum;
	$_SESSION["snumber"] = $snum;
	$_SESSION["sname"]= $sname;
	$_SESSION["city"] = $city;
	$_SESSION["state"] = $state;
	$_SESSION["country"] = $country;
	$_SESSION["zip"]= $zip;
	$_SESSION["uname"] = $uname;


header("location:profile.php");
?>
</body>
</html>
