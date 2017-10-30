<?php
session_start();
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
      <link rel="stylesheet" href="style.css">
</head>

<body>
  
<form action="processing.php" method="post">
  <header>Login</header>
  <label>Username ("Error with usernam/password. Try again")<span>*</span></label>
  <input type="text" name="uname">
  <div class="help">At least 6 character</div>
  <label>Password <span>*</span></label>
  <input type="text" name="pass">
  <div class="help">Use upper and lowercase letters as well</div>
  <button type="submit" name="submit">Login</button>
  <input type="button" value="Register" onclick="window.location.href='http://localhost/login/register.php'">

</form>
  
  
</body>
</html>
