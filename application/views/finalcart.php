<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script type="text/javascript">

   $("#buy").on('click', function () {

       alert('ThankYOU For Shopping With Us!..');

        
    });


 function findSum($i)
  {   
    var rate =  $('#rate'+$i+'').val();
     $("#GrandTotal").empty();
       if($('#Quantity'+$i+'').val()==""){
        alert("Enter Quantity")
         $('#sum'+$i+'').val("");
         $('#sum'+$i+'').focus(); 
       }
        var Quantity = $('#Quantity'+$i+'').val();   
        var sum = rate * Quantity;
        $('#sum'+$i+'').val(sum);      
   }

$(document).ready(function () {
       
    $("#myTable").on('click', '.txtCal', function () {
       // code logic here
        var getValue=$(this).val();
        console.log(getValue);
    });

 });

$(document).ready(function () {
       
    $("#myTable").on('click', '.txtCal', function () {
       var calculated_total_sum = 0;
     
       $("#myTable .txtCal").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum += parseFloat(get_textbox_value);
              }                  
            });
              $("#GrandTotal").html(calculated_total_sum);
       });
  });
</script>
<body>
 
  <form action="<?php echo  base_url() ?>userproductlist" method="post" name="prdtfrm" id="prdtfrm">
    <div class="container">
      <h2>Buy Products</h2>
<table class="w3-table w3-striped" id="myTable">
<label>Innvoice Number:<?php echo $innvoice;?></label><hr>
    <tr>
      <th>Sl.no</th>
      <th>Name</th>
      <th>Email</th>
      <th>Category</th>
      <th>Product Name</th>
      <th>Rate</th> 
      <th>Quantity</th>
      <th>Total</th>
    </tr>
<tbody>
         <?php  
           $i=1;
         foreach ($finalcart->result() as $row)  
         {  
            ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row->name;?></td>
                    <td><?php echo $row->email;?></td>
                    <td><?php echo $row->subproduct_name;?></td>
                    <td><?php echo $row->product_name;?></td>
                    <td>   
                   <input type="text" id="rate<?php echo $i ?>" name="rate>" value="<?php echo $row->product_rate;?>" >
                    </td> 
                    <td>
                    <input type="text" id="Quantity<?php echo $i ?>" name="Quantity">
                   </td>
                    <td>
                    <input type="text" id="sum<?php echo $i ?>"  class="txtCal" onclick="findSum(<?php echo $i ?>);" name="sum">  </td>
                   </td> 
                  </tr>
             <?php 
             $i++;}  
         ?>  
    </tbody>
    </table>
<div><hr>
  <label>Grand Total:<span id="GrandTotal" onclick="findSum(<?php echo $i ?>)"></span></label>
</div>
<div>
  <button class="fa fa-shopping-cart" id="buy"> Buy </button>
</div>
       <hr>
    </div>
  </form>
</div>
</body>
</html>