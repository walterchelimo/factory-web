
<?php
session_start();



include 'db.php';

if(isset($_POST['login'])){
   
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql= "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows > 0){
        $row=mysqli_fetch_assoc($result);
        header("Location: adminpanel.php");
        
    }else{
        header("Location: login.php?error=IINCORRECT CREDENTIALS!!!.");
    }
    
}
   
   
?>
 
<!DOCTYPE HTML>
<html>
<head>
    <center>
    <title>adminlogin</title></head>
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
    </style>
    <form method=POST action='login.php'>
    <div id="login">
        <div id="logo">
            <img src="LO.png">
        </div>
        <div id="welcome">
            <h1>Welcome</h1>
            To login enter your username and your password.
        </div>
        <div id="inputtype">
             <?php if(isset($_GET['error'])){
            ?>
            <p class="error"><?php echo $_GET['error']; ?></p><?php
                                           }?>   
            <label>Username</label><br>
            <input type="text" name="username" placeholder="Enter your username:" required><br><br>
            <label>Passsword:</label><br><br>
            <input type="password" name="password" placeholder="Enter your password" required>
        </div><br>
        <div id="button">
            <input type="submit" name="login" value="login" onclick="walter()" ><br><br>
            <a href="passrecovery.php">Forgot Password?</a><br>
             <a href="register.php">Register</a>
        </div>
        
    </div>
    </form>
    
    <script type="text/javascript">
        function walter(){
            alert("Are you sure!!");
        }
    </script>
    
    
    
    
    
    
    
    
    </body>
    </html>