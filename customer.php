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
<h2>Registered Customers</h2>
<div class="mtn-pdd2">
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="log-form" class="log-formww">
<button type="submit" name="custom-btn" class="sale">VIEW ALL</button>
</form><br><br>
<table class="tabo">
<tr>
<td class="tab">Customer-ID</td><td class="tab">First Name</td><td class="tab">Last Name</td><td class="tab">User email</td>
</tr>
<?php
/*  These codes will get the user from the table users in the unsa database... only signed-up users.. */

if (isset($_POST['custom-btn'])) {
$server = "localhost";
$dbUsername ="root";
$dbpasswd = "";
$dataBase = "lockhart";
$conn = mysqli_connect($server, $dbUsername, $dbpasswd, $dataBase);
if (!$conn) {
die("connection to database failed!");
}
$sql = "SELECT u_id, fname,lname, user_email FROM users";
$results = $conn->query($sql);

if ($results->num_rows > 0) {
    while ($row = $results-> fetch_assoc()) {
       echo"<tr><td>" .$row['u_id'] ."</td><td>" .$row['fname'] ."</td><td>" .$row['lname'] ."</td><td>" .$row['user_email'] ."</td></tr>";
      
    }
    echo"</table>";
     echo" <a href='customer.php'><button>CUSTOMERS' TABLE</button></a>";
}
else{
    echo"No Results form table!.";
}
}

?>
</table>

</div>
</body>
</html>
<?php
include 'foot.php';
?>