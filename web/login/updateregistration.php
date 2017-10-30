<?php
session_start();
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Registration Page</title>
      <link rel="stylesheet" href="style.css">
</head>

<body>
  
<?php   
echo '<form action="updateregprocessing.php" method="post">';
  echo '<header>Update Information Below</header>';
  
  echo '<header>User Information</header>';
  echo '<label>Username<span>*</span></label>';
  echo '<input type="text" name="newuname" value = '. $_SESSION['uname'] . '>';
  echo '<label>Password<span>*</span></label>';
  echo '<input type="text" name="newpass" value = '. $_SESSION['pass'] . '>';

  echo '<header>Contact Information</header>';
  echo '<label>First Name<span>*</span></label>';
  echo '<input type="text" name="newfname" value = '. $_SESSION['first'] . '>';
  echo '<label>Last Name <span>*</span></label>';
  echo '<input type="text" name="newlname" value = '. $_SESSION['last'] . '>';
  echo '<label>Phone Number</label>';
  echo '<input type="text" name="newpnumber" value = '. $_SESSION['pnumber'] . '>';

  echo '<header>Address Information</header>';
  echo '<label>Street Number<span>*</span></label>';
  echo '<input type="text" name="newsnumber" value = '. $_SESSION['snumber'] . '>';
  echo '<label>Street Name <span>*</span></label>';
  echo '<input type="text" name="newsname" value = '. $_SESSION['sname'] . '> ';
  echo '<label>City Name<span>*</span></label>';
  echo '<input type="text" name="newcity" value = '. $_SESSION['city'] . '>';
  echo '<label>State Name <span>*</span></label>';
  echo '<input type="text" name="newstate" value = '. $_SESSION['state'] . '>';
  echo '<label>Country Name<span>*</span></label>';
  echo '<input type="text" name="newcountry" value = '. $_SESSION['country'] . '>';
  echo '<label>Zip Code <span>*</span></label>';
  echo '<input type="text" name="newzip" value = '. $_SESSION['zip'] . '>';

  

  echo '<button type="submit" name="submit">Update</button>';

echo '</form>';
  
  ?>
</body>
</html>