
<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="lock.css">
        <link rel="stylesheet" href="slider.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/
font-awesome/4.7.0/css/font-awesome.main.css">
        <title>LockHart Resturants</title>
    </head>

    <body>
        <h1>Get the Booking Form</h1>
<br>
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<button name="get-btn" class="sale">PICK A FORM</button>
<br><br>
</form>        

<?php
if (isset($_POST['get-btn'])) {

  echo '<div class="food-form">
<h4>Field in The following Credentials:</h4>
Name: <input type="text" name="name"><br><br>
E-mail: <input type="text" name="email"><br><br>
Telephone: <input type="text" name="tel"><br><br>
Location: <input type="text" name="place"><br><br>
Booking For: <select name="food" id="">
        <option >Break fast</option>
        <option >Lunch</option>
        <option >Supper</option>
        <option >Dinner</option>
</select><br><br>
Food Type: <input type="text" name="foodType"><br><br>
Price: <input type="text" name="subject" placeholder="See from the price tag"><br><br>
Date: <input type="text" name="day"><br><br>
Contact person: <input type="text" name="contP" placeholder="Anyone who can pick for you"><br><br>
Telephone: <input type="text" name="tel"><br><br>
<a href="sales.php"><button>SUBMIT</button></a>
<a href="sales.php"><button>CLOSE FORM</button></a>
<br><br>
</div>';
} 

?>


</body>

</html>
<?php
include 'foot.php';