<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="tfms";

$conn=mysqli_connect($servername, $username,$password, $dbname);
if (!$conn){
    echo"connection failed!";
}

?>