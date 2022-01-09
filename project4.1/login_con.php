<?php
session_start();

include 'db.php';

if(isset($_POST['submit'])){
    
    $farmerid=$_POST['farmerid'];
    $password=md5($_POST['password']);
    
    $sql="SELECT * FROM register_farmer WHERE farmerid='$farmerid' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows > 0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['firstname']=$row['firstname'];
        header("Location: home.php");
        
    }else{
        echo"whoops something went wrong";
    }
    
}
   
   
?>