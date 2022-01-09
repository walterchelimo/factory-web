        <?php

session_start(); 

include "db.php";

        $conn = mysqli_connect("localhost", "root", "", "tfms");
          
       
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
     if(isset($_POST['Calculate'])){
        $farmerid =  $_POST['farmerid'];
		$weight =  $_POST['weight'];
        $ksh = $_POST['ksh'];
        $date =  $_POST['date'];
   
        
    
          
    
        $sql = "INSERT INTO kilograms  VALUES ('$farmerid', 
            '$weight','$ksh','$date')";
    
    
        if(mysqli_query($conn, $sql)){
            echo "stored successfully!!"; 
  
           
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
     }


        mysqli_close($conn);
        ?>
<html>
    <head>
    <title>update farmers details</title>
    </head>
    <body>
         <form method=POST action='updatef.php'>
        <div id="cal">
            <label>Farmer ID:</label><br><br>
            <input type="text" name="farmerid" required><br><br>
            <label>Tea (kgs):</label><br>
            <input type="text" name="weight" required><br><br>
            <labe>Amount (perkgs):</labe><br><br>
            <input type="text" name="ksh" required>ksh<br><br>
            <label for="birthday">Date:</label><br><br>
            <input type="date" name="date" required><br><br>
            <input type="submit" name="Calculate">
        </div>
        </form>
    </body>
</html>