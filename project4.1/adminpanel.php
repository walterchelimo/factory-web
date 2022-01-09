
<?php

session_start();
include "db.php"; 
if(isset($_POST['Calculate'])){
        $farmerid =  $_POST['farmerid'];
		$weight =  $_POST['weight'];
        $date =  $_POST['date'];
  
        
   
        
    
          
    
        $sql = "INSERT INTO kilograms  VALUES ('$farmerid', 
            '$weight','$date')";
    
    
        if(mysqli_query($conn, $sql)){
            echo "stored successfully!!"; 
  
           
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
     }

?>
<?php

include 'db.php';

if(isset($_POST['delete'])){
    
    $farmerid=$_POST['farmerid'];
    
     
$sql = "DELETE FROM register_farmer WHERE farmerid='$farmerid'";
$s = "DELETE FROM kilograms WHERE farmerid='$farmerid'";

    

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
    
    
if (mysqli_query($conn, $s)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}
session_destroy();

?>
<html>
<head>
    <title>adminpanel</title></head>

    <style>
        #logo{
            text-align: center;
        }
       
        #header{
            background-color:midnightblue;
            color:white;
            display:inline-block;
            height: 75px;
            padding-left: 20px;
            width: 100%;
        }
        .avatar{
            vertical-align: center;
            height: 40px;
            border-radius:50%;
        
        }
        
        
       
     
        #v{
            position:static;
            padding-left: 30px;
            padding-right: 30px;
            background-color: #ccc;;
        }
        #one{
            display: inline-block;
            width:30%;
            
             height: 400px;
            
        }
        #two{
            display:inline-block;
            height: 400px;
            width:34%;
            position: absolute;
           
        }
        #three{
            display:inline-block;
            height: 400px;
            width:30%;
            float:right;
        }
        #four{
            display: inline-block:
            width:6%;
        }
        #four a{
            text-decoration-line: none;
            font-size: 20px;
        }
    </style>
    <body>
        <div id="logo">
            <img src="LO.png">
        </div>
  
        <div id="header">
            <img src="avatar.jpg" class="avatar">
            <caption>Admin Panel</caption><b>ADMIN PANEL</b>
            <div id="logout"><a href="logoutadmin.php" style="color: red;">logout</a>
                
            </div>
        </div>
        <div id="v">
            


  <div id="one" style="background-color:#ccc;;">
    <h2>DELETE USER</h2>
    
         <form method="POST" action="adminpanel.php">
        <label>Select the Farmer To Delete:</label><br><br>
        <select name="farmerid">
        <option value="">Select Farmer</option>
             <?php
            $sql_farmer = mysqli_query($conn,"SELECT * FROM register_farmer ");
            while($row = mysqli_fetch_array($sql_farmer) ){
                ?>
                <option value="<?php echo $row['farmerid']; ?>  "><?php echo $row['firstname']." ".$row['middlename']; ?> 
                </option>
                <?php
                }
             ?>
       </select><br><br>
        <input type="submit" name="delete" value="DELETE">
      </form>
      
  </div>
  <div id="two" style="background-color:#ccc;;">
    <h2>REGISTER FARMER</h2>
    <p><a href="farmer_registration.php">+ADD</a></p>
  </div>
 
  <div id="three" style="background-color:#ccc;">
    <h2>UPDATE TEA PRODUCE</h2>
       <form method=POST action='adminpanel.php'>
    
            <label>Farmer ID:</label><br><br>
            
            <select name="farmerid" >
             <option value="">Select Farmer</option>
             <?php
            $sql_farmer = mysqli_query($conn,"SELECT * FROM register_farmer ");
            while($row = mysqli_fetch_array($sql_farmer) ){
                ?>
                <option value="<?php echo $row['farmerid']; ?>  "><?php echo $row['firstname']." ".$row['middlename']; ?> </option>
                <?php
                }
             ?>
            </select><br><br>
            <label>Tea (kgs):</label><br>
            <input type="text" name="weight" required><br><br>
            
            <label for="submissiondate">Date:</label><br><br>
            <input type="date" name="date" required><br><br>
            <input type="submit" name="Calculate">
       
        </form>
  </div>
             <div id="four" style="background-color:#ccc;;">
     <h2>VIEW REPORTS</h2>
      <p><a href="farmers_records.php">view farmers records</a></p>
      <p><a href="total_teaproduce.php"> view total tea produce</a></p>
  </div>
</div>
              
         
        
    </body></html>

