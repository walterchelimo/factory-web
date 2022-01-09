<?php
session_start();

include 'db.php';

if(isset($_POST['submit'])){
    
    $farmerid=$_POST['farmerid'];
    $password=md5($_POST['password']);
    

    $sql= "SELECT * FROM register_farmer WHERE farmerid='$farmerid' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows > 0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['firstname']=$row['firstname'];
        $_SESSION['middlename']=$row['middlename'];
        $_SESSION['lastname']=$row['lastname'];
        $_SESSION['bankname']=$row['bankname'];
        $_SESSION['gender']=$row['gender'];
        $_SESSION['phonenumber']=$row['phonenumber'];
        $_SESSION['email']=$row['email'];
        $_SESSION['farmerid']=$row['farmerid'];
        $_SESSION['collection']=$row['collection'];
        $_SESSION['bankbranch']=$row['bankbranch'];
        $_SESSION['accountnumber']=$row['accountnumber'];
        header("Location: welcome.php");
        
   
    
}
    else{
        header("Location: farm.php?error=IINCORRECT CREDENTIALS!!!.");
    }
    
}
  
?>
<!DOCTYPE html>
<html>
<head>
    <center>
    <title>farmlogin</title>
<body>
    <style>
        body{
            background-color: aliceblue;
        }
        #login{
            height:700px;
            width: 600px;
            background-color:white;
            text-align: center;
        }
        #welcome{
            text-align: center;
            padding-bottom: 20px;
        }
        #inputtype{
            text-align: justify;
            padding-left: 50px;
        }
        #inputtype input{
            width:500px;
            height:35px;
            border:2px solid grey;
            border-radius: 2px;
            padding-left: 20px;
        }
        #button input{
            background-color: red;
            color:white;
            border-radius: 20px;
            text-align: center;
            height: 40px;
            width:80px;
            font-size:20px;
        }
        #button a{
            font-size:20px;
            text-decoration-line: none;
        }
        .error{
            background: white;
            color:red;
            padding:10px;
            width:95%;
            border-radius: 5px;
            text-align: center;
        }
    </style>
    <div id="login">
        <div id="logo">
            <img src="LO.png">
        </div>
        <div id="welcome">
            <h1>Welcome</h1>
            To login enter your username and your password.<br>
        </div>
         <form method="POST" action="farm.php">
        <div id="inputtype">
            <?php if(isset($_GET['error'])){
            ?>
            <p class="error"><?php echo $_GET['error']; ?></p><?php
                                           }?>
            <label>FarmerID</label><br>
            <input type="text" text="farmerid" name="farmerid" placeholder="Enter your Farmer ID:" required><br><br>
            <label>Passsword:</label><br><br>
            <input type="password" password="password" name="password" placeholder="Enter your password" required>
        </div><br>
        <div id="button">
            <input type="submit" name="submit" value="submit"><br><br>
            <a href="passrecovery.php">Forgot Password?</a>
        </div>
        </form>
        
    </div>
    </body>
    </center>
    </html>