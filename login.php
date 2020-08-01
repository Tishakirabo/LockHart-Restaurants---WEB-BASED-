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

<div class="main">
<br>
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="log-form">
<h2>Login</h2>
Username or Email <br>
<input type="text" name="usernamef"><br>
Password <br>
<input type="password" name="usernamef"><br><br>
<a href="index.php"><input type="button" value="LOGIN" class="log-btn"></a>
<br><br>
Create New Account? <a href="signup.php">Sign Up</a> 
</form>
</div>

</body>
</html>