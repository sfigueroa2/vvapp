<html>
<head>
<title>Symposium Dashboard</title>
</head>
<body>
  <h1>Manage System Dashboard</h1><hr/>

  <?php echo validation_errors(); ?>
  <?php echo form_open('AdminController/index'); ?>

  <form method="POST" action="">
  </form>
  <h3>Uploade New Data</h3>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/deleteTables'">New Symposium</button></p>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ImportPosters'">Import Posters</button></p>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ImportJudges'">Import Judges</button></p>



  <h3>Other Functions</h3>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/SetSession'">Manage Sessions</button></p>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManageJudges'">Manage Judges</button></p>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManageAdmin'">Manage Administrators</button></p>  
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManageArchive'">Archive Data</button></p>




  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManagePoster'">Manage Posters</button></p>
  


</body>
