<?php
require("db.php");


function getUsersData($firstname)
{
    $array =array();
     $conn=mysqli_connect('localhost','root','','tfms');
    $sql="SELECT farmerid FROM register_farmer where firstname='$firstname'";
    $result=mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result))
    {
        $array['firstname']=$row['firstname'];
        $array['farmerid']=$row['farmerid'];
        $array['middlename']=$row['middlename'];
        $array['lastname']=$row['lastname'];
        $array['gender']=$row['gender'];
        $array['collection']=$row['collection'];
        $array['phonenumber']=$row['phonenumber'];
        $array['bankname']=$row['bankname'];
        $array['accountnumber']=$row['accountnumber'];
        $array['branch']=$row['branch'];
    }
        }
    return $array;
}
function getId($firstname)
    
{
    $conn=mysqli_connect('localhost','root','','tfms');
    $sql="SELECT farmerid FROM register_farmer where firstname='$firstname'";
    $result=mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result)){
        return $row['farmerid'];
    }
        }
    }
   
}
}




?>