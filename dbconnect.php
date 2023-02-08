<?php
$server="localhost";
$user="nileshp";
$password="1234";
$dbname="login";
$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn)
{
    die("Connection Failed".mysqli_error($conn));
}
?>