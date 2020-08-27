<!DOCTYPE html>
<html>
<title>Carted list</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
    function changecart(dataString)
     {
       // alert('dataString');

        $.ajax({
          url: "<?php echo base_url();?>removeCart",
          method:"POST",
          data:{id:dataString},
          dataType:"JSON",
          success:function(data)
          {
            location.reload();
          }
          });
       // $.removeData(dataString);
       //location.reload();
     }

  
</script>
<body>

<div class="w3-container">
  <h2>Carted Items List</h2>
  <table class="w3-table w3-striped">
    <tr>
      <th>Sl</th>
      <th>Category</th>
      <th>Cars</th>
      <th>Rate</th>
      <th> </th>
    </tr>
     <tbody>
         <?php  
           $i=1;
         foreach ($cart->result() as $row)  
         {  
            ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row->subproduct_name;?></td>
                    <td><?php echo $row->product_name;?></td>
                    <td><?php echo $row->product_rate;?></td> 
                    <td><span  onClick="changecart('<?php echo $row->cart_id;?>')" ><i class="fa fa-external-link"></i></span></td> 
                  </tr>
             <?php 
             $i++;}  
         ?>  
          </tbody> 
    </table><hr>
<a href="<?php echo base_url();?>finalCart"><button class="fa fa-shopping-cart"> Buy Now</button></a>

</div>

</body>
</html>
