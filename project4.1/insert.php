<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="tfms";

$conn=mysqli_connect($servername, $username,$password, $dbname);

if (!$conn){
    echo"connection successful";
    mysqli_connect_error();
}
else{
    echo"connection successful";
}
  
     $firstname = $_REQUEST['firstname'];
     $middlename = $_REQUEST['middlename'];
     $lastname = $_REQUEST['lastname'];
     $gender = $_REQUEST['gender'];
     $phonenumber = $_REQUEST['phonenumber'];
     $email = $_REQUEST['email'];
     $farmerid = $_REQUEST['farmerid'];
     $collection = $_REQUEST['collection'];
     $bankname = $_REQUEST['bankname'];
     $bankbranch = $_REQUEST['bankbranch'];
     $accountnumber = $_REQUEST['accountnumber'];
     $password = $_REQUEST['password_1'];
     
  
     $sql = "INSERT INTO register_farmer VALUES ('$firstname','$middlename','$lastname','$gender','$phonenumber',$email','$farmerid','$collection','$bankname','$bankbranch','$accountnumber',MD5('".$password."'))";


     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

?>