<center>
        <?php

session_start(); 

include "db.php";

        $conn = mysqli_connect("localhost", "root", "", "tfms");
          
       
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
     if(isset($_POST['register'])){
        $firstname =  $_POST['firstname'];
		$middlename =  $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $gender =  $_POST['gender'];
		$phonenumber =  $_POST['phonenumber'];
        $email = $_POST['email'];
        $farmerid = $_POST['farmerid'];
        $collection = $_POST['collection'];
        $bankname = $_POST['bankname'];
        $bankbranch = $_POST['bankbranch'];
        $accountnumber = $_POST['accountnumber'];
        $password_1 = MD5($_POST['password_1']);
        $password_2 = MD5($_POST['password_2']);
    if($password_1!=$password_2){
        echo"password does not match";
    }
    else{
        
    
          
    
        $sql = "INSERT INTO register_farmer  VALUES ('$firstname', 
            '$middlename','$lastname','$gender','$phonenumber','$email','$farmerid','$collection','$bankname',
            '$bankbranch','$accountnumber','$password_1')";
    
    }
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
           
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
     }


        mysqli_close($conn);
        ?>
    </center>
