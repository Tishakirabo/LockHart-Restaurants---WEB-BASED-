<?php


if (isset($_POST['register-btn'])) {
$server = "localhost";
$dbUsername ="root";
$dbpasswd = "";
$dataBase = "lockhart";
$conn = mysqli_connect($server, $dbUsername, $dbpasswd, $dataBase);
if (!$conn) {
die("connection to database failed!");

}

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$Email = $_POST['usermail'];
$UserPwd = $_POST['pwd'];
$Confpwd = $_POST['pwd-repeat'];

if (empty($firstName) || empty($lastName ) ||empty($Email) || empty($UserPwd) || empty($Confpwd)) {
	
	echo "Please fill all fields!";
	exit();
}
elseif ($UserPwd !== $Confpwd) {
		echo " Your password did not match, Please try again.";
}
else{
	
    $sql = "SELECT fname FROM users WHERE fname = ?;";
    $stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("location: register.php");
	echo " Please try connecting again.";
}
else{
	mysqli_stmt_bind_param($stmt, "s",$Email);
    mysqli_stmt_execute($stmt);
     mysqli_stmt_store_result($stmt);
     $resultCheck = mysqli_stmt_num_rows($stmt);
     if ($resultCheck > 0) {
 	header("location: register.php ==?? username already exist!");

	}
	else{
	$sql = "INSERT INTO users (fname,lname, user_email, passwd
 ) VALUES (?, ?, ?, ?)";
 $stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
 	header("location: reg-user.php");
	echo "Failled to connect.";
  }
else{
    $pwdHashed = password_hash($UserPwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss",$firstName, $lastName, $Email, $UserPwd);
	mysqli_stmt_execute($stmt);
    header("Location: index.php?==:: Signup was Succesful::");
    exit();
      }
    }
  }
 
 mysqli_stmt_close($stmt);
 mysqli_close($conn);
}
}
else{
	 header("Location: register.php ");
	 exit();
}


