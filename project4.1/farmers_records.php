
<html>
    <head>
<title> FARMERS DETAILS PAGE</title>
    </head>
<style>
    #table1 th, td {
  padding: 15px;
  text-align: left;
}
</style>
<body>
<div id="head1">
    <h1>View Farmer Details</h1>
</div>
    

<div id="table1" >
    <table border="1">
        <tr> 
            <th>FIRSTNAME </th>
            <th>MIDDLENAME</th>
            <th>LASTNAME</th>
            <th>GENDER</th>
            <th>PHONE NUMBER</th>
            <th>EMAIL </th>
            <th>FARMER ID</th>
            <th>COLLECTION CENTER</th>
            <th>BANK NAME</th>
            <th>BANK BRANCH</th>
            <th>ACCCOUNT NUMBER</th>
            
        </tr>
        <?php

include "db.php"; 

$records = mysqli_query($conn,"select * from register_farmer"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['firstname']; ?></td>
    <td><?php echo $data['middlename']; ?></td>
    <td><?php echo $data['lastname']; ?></td>
    <td><?php echo $data['gender']; ?></td>
    <td><?php echo $data['phonenumber']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['farmerid']; ?></td>
    <td><?php echo $data['collection']; ?></td>
    <td><?php echo $data['bankname']; ?></td>
    <td><?php echo $data['bankbranch']; ?></td>
    <td><?php echo $data['accountnumber']; ?></td>
  </tr>	
<?php
}
?>
    </table>

</div>

</body>
</html>

