	<!DOCTYPE html>
<html>
<title>Admin pannel</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container">
 <h2>Admin Pannel</h2>
  <hr>
  <button  onClick="location.href='<?php echo base_url();?>productAdd'" >Product Add</button>
   <button  onClick="location.href='<?php echo base_url();?>productlist'" >Product List</button>
  <button style="float: right;" onClick="location.href='<?php echo base_url();?>loginController/logout'" >
  LOGOUT</button><hr>
</div>
<!-- adding page styles and scripts -->

  