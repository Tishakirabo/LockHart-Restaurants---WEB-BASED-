
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
    
<div class="meja">
    <div><h3>Contact Location</h3>
        <img src="img/food/staticmap.png" alt="">
    </div>
    <div>
        <h3>
             Plot 37 - Mbarara-Road, Kiruhura Town, Contact +256775262383 / +256755500675 or wwww.lockhartrestu.com
        </h3>
    </div>
<div>
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h4>Contact Us With your Querry:</h4>
Name: <input type="text" name="name">
E-mail: <input type="text" name="email">
Subject: <input type="text" name="subject">
Contact messages: <textarea name="messages" rows="5" cols="30"></textarea><br><br>
<input type="submit" value="Submit" name="send-conta">
</form>
     <style rel="stylesheet">
       button{
           background-color:skyblue;
           color:white;
           padding:4px;
       } 
     </style>
</div>

<?php


if (isset($_POST['send-conta'])) {

    $name =$_POST['name'];
    $mailFrom =$_POST['email'];
    $subject =$_POST['subject'];
    $message =$_POST['messages'];

    $mailTo = "kirabotisha@gmail.com";
    $headers = "From: ".$mailFrom;
    $text ="You have received a contact email from: ". $name." of" .$school ."\n\n". $message;
    mail( $mailTo, $subject, $text,$headers );
   
    header("Location: contac.php? mail=sent");
} 

?>
</div>
<br>
           
</body>
</html>
<?php
include 'foot.php';

