<?php

require 'db.php';

if(isset($_POST['fullname']))
{

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO contact(fullname,email,message)
VALUES('$fullname','$email','$message')";

if(mysqli_query($conn,$sql))
{
    header("Location:index.php?contact=success");
    exit();
}
else
{
echo mysqli_error($conn);
}

}

?>