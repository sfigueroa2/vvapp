<html>
<head>
<title>Set Active Session</title>
</head>
<body>

<h1>Set Active Session</h1><hr>


<?php echo validation_errors(); ?>

<?php echo form_open('AdminController/SetSession'); ?>
<form method="post" action="<?php echo base_url() . "index.php/AdminController/SetSession"?>">

<p><input type="radio" name="session" value="A">A</p>
<p><input type="radio" name="session" value="B">B</p>
<p><input type="radio" name="session" value="C">C</p>
<p><input type="radio" name="session" value="D">D</p>
<p><input type="radio" name="session" value="N">Turn off Sessions</p>
<p><input type="submit" name="submit" value="Set Session" /></p>
</form>
<?php
    if (isset($_POST['submit'])) {
        if(isset($_POST['session'])){
            echo "Active Session is now: ".$_POST['session'];  //  Displaying Selected Value
        }
    }
?>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/index'">Back to Admin Menu</button></p>
</body>
  </html>
