<html>
<head>
<title>Delete Posters</title>
</head>
<body>
  <h1>Delete Posters</h1><hr>

  <?php echo validation_errors(); ?>
  <?php echo form_open('AdminController/DeletePoster'); ?>
  <form>
    <label>Poster Number: </label>
    <input type="text" name="pnumber" value=""/>
    <input type="submit" name="snumber" value="Search">

    <label>Email: </label>
    <input type="text" name="pemail" value=""/>
    <input type="submit" name="semail" value="Search">
    
  </form>
  <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManagePoster'">Back to Manage Posters</button></p>

</body>
</html>
