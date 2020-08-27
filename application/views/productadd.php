<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 
  <form action="<?php echo  base_url() ?>addProduct" method="post" name="prdtfrm" id="prdtfrm">
    <div class="container">
      <h2>Add Product</h2>
      <label for="username"><b>Category</b></label>
   <select class="form-control form-control-lg" name="category" id="category" required>
      <option value="" disabled selected>Category</option>
              <?php
                  foreach ($category as $cat) {
                      ?>
                      <option value="<?php echo $cat->subproduct_id?>"><?php echo $cat->subproduct_name; ?></option>
                      <?php
                  }
              ?>
          </select><br>

      <label for="product"><b>Product</b></label>
      <input type="text" placeholder="Enter Product Name" name="product" required><br>

      <label for="rate"><b>Rate</b></label>
      <input type="text" placeholder="Enter Rate" name="rate" required><br>

      <input type="submit" id="userbtn" class="user-btn"><hr>
     
    </div>
  </form>
</div>
</body>
</html>