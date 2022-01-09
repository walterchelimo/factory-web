<html>
    <head></head>
    <body>
       
          <div id=payments>
        <h2>Total Tea Produce Since:</h2>
        <table border="1">
        <tr>
        <th>ID</th>
        <th>WEIGHT</th>
        <th>DATE</th>
        </tr>
        
        <?php
include "db.php"; 
           $date='date';

     $id = '$farmerid';
     $query =mysqli_query($conn,"SELECT * FROM kilograms");
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
    </body>
</html>