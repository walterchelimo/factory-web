<?php
session_start();

    ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        body{ 
            font: 14px sans-serif;
            text-align: center;
            background-color:white;
        
        }
        #head{
            background-color: azure;
            padding-left: 20px;
            padding-bottom: 10px;
        }
        #head img{
            vertical-align: center;
            height: 100px;
            border-radius:50%;
        }
        #head a{
            text-decoration-line: none;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div id=head>
        <img src="avatar.jpg">
        <a href="logout.php">Logout</a>
    
        <h1>Welcome <?php echo $_SESSION["firstname"] . ".<br>";?>
    </h1>
    </div>
    <br>
    <div id=container>
    <div id=acc>
    <h2>ACCOUNT DETAILS</h2>

    <?php 
       echo "<b>Firstname: </b>" . $_SESSION["firstname"] . ".<br><br>";
       echo "<b>Middlename:</b> " . $_SESSION["middlename"] . ".<br><br>";
       echo "<b>Lastname:</b> " . $_SESSION["lastname"] . ".<br><br>";
       echo "<b>Gender: </b>" . $_SESSION["gender"] . ".<br><br>";
       echo "<b>Phone Number: </b>" . $_SESSION["phonenumber"] . ".<br><br>";
       echo "<b>Email Address :</b>" . $_SESSION["email"] . ".<br><br>";
       echo "<b>Farmer Id:</b> " . $_SESSION["farmerid"] . ".<br><br>";
       echo "<b>Collection Center: </b>" . $_SESSION["collection"] . ".<br><br>";
       echo "<b>Bank Name: </b>" . $_SESSION["bankname"] . ".<br><br>";
       echo "<b>Bank Branch: </b>" . $_SESSION["bankbranch"] . ".<br><br>";
       echo "<b>Account Number:</b>" . $_SESSION["accountnumber"] . ".";?>
    </div>
    <div id=payments>
        <h2>PRODUCE LIST</h2>
        <table border="1">
        <tr>
        <th>ID</th>
        <th>WEIGHT</th>
        <th>DATE</th>
        </tr>
        
        <?php
include "db.php"; 

     $id =  $_SESSION["farmerid"];
     $query =mysqli_query($conn,"SELECT * FROM kilograms where farmerid='$id' order by date desc limit 31 ");
     $count =1;
     $total = 0;
     while($row = mysqli_fetch_array($query)){
      
        ?>
<tr>
<td><?php echo $count; ?> </td>
<td><?php echo $row['weight']; ?> </td>
<td><?php echo $row['date']; ?> </td>
</tr>
        <?php
        $total = $total + $row['weight'];
    $count++;
    } ?>
    <tr>
    <td>TOTAL</td>
    <td><?php echo $total; ?></td>
  <td>  <?php  echo date("Y.m.d"); ?> </td>
    </tr>
        </table>
    </div>
    </div>
    
   
   
</body>
    <style>
        body{
            text-align: left;
        }
        #acc{
            display:inline-block;
            
            height:500px;
            width: 30%;
            background-color: gr;
            color:black;
            padding-left:20px;
        }
        #container{
            position:static;
        }
        #payments{
            display:inline-block;
            height: 500px;
            width:30%;
            position: absolute;
            
        }
    </style>
</html>