<?php
require 'dbconnect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$rpass=$_POST['rpassword'];
$mobile=$_POST['mobile'];
$pincode=$_POST['pincode'];
$address=$_POST['address'];
if($pass==$rpass)
{
$query="INSERT into signup(Name,Email,Password,Mobile,Pincode,Address) VALUES ('$name','$email','$pass','$mobile','$pincode','$address')";
if(mysqli_query($conn,$query))
{
    echo"<script>alert('Your Account is created succesfully');</script>";
    header("refresh:0.5;./LoginPage.html");
}
else
{
    echo"<h2 style='color:red;text-align:center;'>This Email is already exists Please use different One</h2>";
}
}
?>