

<?php
    include('connect.php');
    if(isset($_POST['names']) and isset($_POST['email']))
{
    $names=$_POST["names"]; 
    $email=$_POST["email"]; 
    $comments=$_POST["comments"];       
    mysqli_query($success, "INSERT INTO `personal`.`person` (name, email, comments) VALUES ('$names', '$email', '$comments')");
    }
    mysqli_close();
?> 

<a href="index.html" style="text-align:center; color:blue;">Click Here To Return to My Page</a>