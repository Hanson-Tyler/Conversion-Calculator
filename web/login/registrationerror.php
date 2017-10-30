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
  
<form action="processingregistration.php" method="post">
  <header>Register New User: Enter Information Below (Username already exists)</header>
  
  <header>User Information</header>
  <label>Username<span>*</span></label>
  <input type="text" name="newuname">
  <label>Password<span>*</span></label>
  <input type="text" name="newpass">

  <header>Contact Information</header>
  <label>First Name<span>*</span></label>
  <input type="text" name="newfname">
  <label>Last Name <span>*</span></label>
  <input type="text" name="newlname">
  <label>Phone Number</label>
  <input type="text" name="newpnumber">

  <header>Address Information</header>
  <label>Street Number<span>*</span></label>
  <input type="text" name="newsnumber">
  <label>Street Name <span>*</span></label>
  <input type="text" name="newsname">
  <label>City Name<span>*</span></label>
  <input type="text" name="newcity">
  <label>State Name <span>*</span></label>
  <input type="text" name="newstate">
  <label>Country Name<span>*</span></label>
  <input type="text" name="newcountry">
  <label>Zip Code <span>*</span></label>
  <input type="text" name="newzip">

  

  <button type="submit" name="submit">Register</button>

</form>
  
  
</body>
</html>