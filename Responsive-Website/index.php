

<?php   // Script: Getting User Comments in Database
    include('connect.php');
    if(isset($_POST['names']) and isset($_POST['email']))
{
    $names=$_POST["names"]; 
    $email=$_POST["email"]; 
    $comments=$_POST["comments"];       
    mysqli_query($success, "INSERT INTO `personal`.`person` (name, email, comments) VALUES ('$names', '$email', '$comments')");
    }
    mysqli_close();
include('index.html');
?> 
