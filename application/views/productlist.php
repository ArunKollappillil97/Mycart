
<script type="text/javascript">

  function changecart(dataString)
  {
      // alert(dataString);

        $.ajax({
          url: "<?php echo base_url();?>shoppingController/cartchanging",
          method:"POST",
          data:{id:dataString},
          dataType:"JSON",
          success:function(data)
          {
            
          }
          });
      //  $.removeData(dataString);
       //location.reload();
  }
  function  fetchcategory($value)
  {
       // alert($value);

        $.ajax({
          url: "<?php echo base_url();?>shoppingController/fetch_subcategory",
          method:"POST",
          data:$value,
          dataType:"JSON",
          success:function(data)
          {
            $("#products").empty();
            var details="";
            for(var i=0;i<data.res.length;i++)
                    {
       details+="<tr><td>"+data.res[i].subproduct_name+"</td>";
       details+="<td>"+data.res[i].product_name+"</td>";
       details+="<td>"+data.res[i].product_rate+"</td>";
       details+="<td><input type='hidden' name='checkid' id='checkid' value='"+data.res[i].product_id+"'><input type='checkbox'  onclick='changecart("+data.res[i].product_id+");'name='checkme' id='checkme' value='"+data.res[i].product_id+"'></td>";
          }
          $("#products").append(details);
           }
           

          });
        }
      
</script>
<body>

<div class="w3-container">
  <h3>Product List</h3>
<form action="/action_page.php">
  <label for="cars">Choose car Category:</label>
 <select class="form-control form-control-lg" name="category" id="category"  onchange="fetchcategory(this.value)" required>
      <option value="" disabled selected>Category</option>
              <?php
                  foreach ($category as $cat) {
                      ?>
                      <option value="<?php echo $cat->subproduct_id?>"><?php echo $cat->subproduct_name; ?></option>
                      <?php
                  }
              ?>
          </select><hr>
          <div class="w3-container">
  <table class="w3-table w3-striped">
    <tr>
      <th>   <?php echo $this->session->userdata('user_id');?></th>
      <th>Category</th>
      <th>Cars</th>
      <th>Rate</th>
      <th>-select-</th> 
    </tr>
    <tbody id='products'>
       
    </tbody>
    </table>
</div>
<hr>

</form>
  <button   onClick="location.href='<?php echo base_url();?>cartedproductlist'" > Add to Cart</button>
</div>

</body>
</html>
