<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Manage Administrators</title>
  </head>
  <body>
    <h1>Manage Administrators</h1><hr/>
    <form method="POST" action="">
    </form>
</body>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/AdminList'">View Admin List</button></p>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/CreateAdmin'">Insert New Admin</button></p>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/DeleteAdmin'">Delete Admin</button></p>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/UpdateAdmin'">Update Admin</button></p>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/index'">Back</button></p>
</body>
</html>
