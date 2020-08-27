<!DOCTYPE html>
<html>
<title>Product list</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Product Items List</h2>
 
  <table class="w3-table w3-striped">
    <tr>
      <th>Sl</th>
      <th>Category</th>
      <th>Cars Name</th>
      <th>Rate</th>
    </tr>
    <tbody>
         <?php  
           $i=1;
         foreach ($product->result() as $row)  
         {  
            ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row->subproduct_name;?></td>
                    <td><?php echo $row->product_name;?></td>
                    <td><?php echo $row->product_rate;?></td> 
                  </tr>
             <?php 
             $i++;}  
         ?>  
          </tbody>
    </table>


</div><hr>

</body>
</html>
