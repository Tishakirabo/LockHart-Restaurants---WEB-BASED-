<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="lock.css">
    <title>LockHart Resturants</title>
</head>
<body>

<div class="mtn-pdd">
<form  method="post" action="signup-dbh.php" class="log-form">
<h2>LockHart Resturants</h2>
<h2>Sign Up</h2>
First Name <br>
<input type="text" name="fname"><br>
Last Name <br>
<input type="text" name="lname"><br>
Usermail <br>
<input type="text" name="usermail"><br>
Password <br>
<input type="password" name="pwd"><br>
Confirm Password <br>
<input type="password" name="pwd-repeat"><br><br>

<input type="submit" name="register-btn" value="SIGNUP" class="log-btn"><br><br>
<a href="index.php"><input type="button" value="CANCEL" class="log-btn2"></a>

<br>
</form>
</div>

</body>
</html>
