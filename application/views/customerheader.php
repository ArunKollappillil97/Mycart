<!DOCTYPE html>
<html>
<title>Customer pannel</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js
"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

<div class="w3-container">
 <h2>Customer Pannel</h2>
  <hr>
  <button  onClick="location.href='<?php echo base_url();?>cartedproductlist'" >Carted list</button>
  <button  onClick="location.href='<?php echo base_url();?>userproductlist'" >Product list</button>
  <button style="float: right;" onClick="location.href='<?php echo base_url();?>loginController/logout'" >
  LOGOUT</button><hr>

</div>
