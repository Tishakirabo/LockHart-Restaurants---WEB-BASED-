<?php
session_start();
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="lock.css">
    <title>LockHart Resturants</title>
</head>
<body>

<div class="mtn-pdd2">
    <a href="customer.php"><button>VIEW REGISTERED CUSTOMERS</button></a>
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="log-form" class="log-form2">
<h2>LockHart Resturants <br>Register As Full-time Customer</h2>
First Name:
<input type="text" name="fname"><br><br>
Last Name:
<input type="text" name="lname"><br><br>
Other Name:
<input type="text" name="oname" ><br><br>
Gender/Sex:
<input type="radio" name="genda" id="sex">Male <input type="radio" name="genda" id="sex">Female<br><br>
Age:
<input type="text" name="age"><br><br>
Address:
<input type="text" name="Location / Town"><br><br>
Occupation:
<select name="occupy" id="">
    <option >A Teacher</option>
    <option >A Doctror/Nurse</option>
    <option >An Engineer</option>
    <option >A Police officer</option>
    <option >A Builder</option>
    <option >Others</option>
</select><br><br>
Username:
<input type="text" name="u-name"><br><br>
Usermail:
<input type="text" name="usermail"><br><br>
Password:
<input type="password" name="pwd-repeat" placeholder="Enter your password Once!"><br><br>

<input type="submit" name="regit-btn" value="REGISTER" class="log-btn"><br><br>
<a href="lockhart.php"><input type="button" value="CANCEL" class="log-btn2"></a>

<br>
</form>

<?php

if (isset($_POST['regit-btn'])) {
echo" <div class='success'>
    <h3>Registration is Successful!</h3>
    <h4>We shall ensure your feedings as we are required to.</h4>
   <a href='lockhart.php'> <button>OK</button></a>
</div>";
}
?>
</div>
</body>
</html>
