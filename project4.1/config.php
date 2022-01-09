<?php
   //define('DB_SERVER', 'localhost:3036');
   //define('DB_USERNAME', 'root');
   //define('DB_PASSWORD', 'rootpassword');
  // define('DB_DATABASE', 'database');
   //$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>


<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname="tfms";

$conn=mysqli_connect('localhost','root','','tfms');
//$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?> 