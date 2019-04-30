<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Manage Judges</title>
  </head>
  <body>
    <h1>Manage Judges</h1><hr/>
    <form method="POST" action="">
    </form>
</body>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/JudgeList'">View Judge List</button></p>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/CreateJudge'">Insert New Judge</button></p>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/DeleteJudge'">Delete Judge</button></p>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/UpdateJudge'">Update Judge</button></p>

<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/index'">Back to Menu</button></p>
</body>
</html>
