<html>
<head>
<title>Symposium Dashboard</title>
</head>
<body>
  <h1>Manage System Dashboard</h1><hr/>

  <?php echo validation_errors(); ?>
  <?php echo form_open('AdminController/ArchiveMenu'); ?>

  <form method="POST" action="">
  </form>
  <h3>Uploade New Data</h3>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/finalScores'">Final Scores</button></p>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/rawScores'">Raw Scores</button></p>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/JudgeScoreTimes'">Judges</button></p>
  


</body>
