<html>
<head>
<title>New Symposium</title>
</head>
<body>
  <?php echo validation_errors(); ?>
  <?php echo form_open('AdminController/DeleteTables'); ?>
  <h1>New Symposium</h1><hr>
  <h2>Are you sure you want to clear tables</h2>
  <form>
    <input type="submit" name="no" value="NO, Keep current data">

    <input type="submit" name="yes" value="YES, Clear all data">
  </form>
</body>
</html>