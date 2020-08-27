
<div class="w3-container">
  <h3>Customer List</h3>
 

  <table class="w3-table w3-striped">
    <tr>
      <th>Sl.no</th>
      <th>Name</th>
      <th>Address</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
    <tbody>
         <?php  
           $i=1;
         foreach ($customer->result() as $row)  
         {  
            ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row->name;?></td>
                    <td><?php echo $row->address;?></td>
                    <td><?php echo $row->email;?></td>
                    <td><?php echo $row->phone;?></td> 
                  </tr>
             <?php 
             $i++;}  
         ?>  
          </tbody>
    </table>
</div>

</body>
</html>
