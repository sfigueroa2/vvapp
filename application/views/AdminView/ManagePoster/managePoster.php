<html>
<head>
<title>Manage Posters</title>
</head>
<body>
  <h1>Manage Posters</h1><hr/>

  <?php echo validation_errors(); ?>
  <?php echo form_open('AdminController/index'); ?>

  <form method="POST" action="">
  </form>

  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/PosterList'">View List of Posters</button></p>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/CreatePoster'">Insert Poster</button></p>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ModifyPoster'">Modify Posters</button></p>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/DeletePoster'">Delete Posters</button></p>



  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/index'">Back to Admin Menu</button></p>

</body>
