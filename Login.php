<?php
session_start();
require 'dbconnect.php';

$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * from signup where Email='$email' AND Password='$password'";
$result=mysqli_query($conn,$query);
$row=mysqli_num_rows($result);
if($row==1)
{
    $_SESSION['email']=$email;
    // header("refresh:1;./homepage.php");
        header("refresh:0.5;./homepage.php");
}
else
{
    echo"<script>alert('This Account is not exist Please create an account');</script>";
    header("refresh:0.1;./LoginPage.html");
}
?>