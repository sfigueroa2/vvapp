<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Administrator List</title>
  </head>
  <body>
<h1>Administrator List</h1><hr/>
 <table>
  <tr>
   <td><strong>Admin Id</strong></td>
   <td><strong>Admin Name</strong></td>
   <td><strong>Admin Password</strong></td>

 </tr>
  <?php foreach($Admins as $Admin){?>
  <tr>
      <td><?php echo $Admin->AdminID;?></td>
      <td><?php echo $Admin->AdminName;?></td>
      <td><?php echo $Admin->AdminPass;?></td>

   </tr>
  <?php }?>
</table>
</body>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/manageAdmin'">Back</button></p>
</html>
