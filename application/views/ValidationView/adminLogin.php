<html>
<head>
<title>Admin Login</title>
</head>
<body>

<?php echo validation_errors(); ?>
<?php echo form_open('ValidationController/AdminIndex'); ?>


<h3>Admin Username</h3>
<input type="text" name="usernameA" value="" size="50" />

<h3>Admin Password</h3>
<input type="text" name="passwordA" value="" size="50" />

<div><input id="btn_loginA" name="btn_loginA" type="Submit" value="Login" /></div>



<div><input id="btn_loginJudge" name="btn_loginJudge" type="Submit" value="Go to Judge's Login" /></div>


</form>

</body>
</html>
