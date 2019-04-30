<html>
<head>
<title>Judge Login</title>
</head>
<body>

<?php echo validation_errors(); ?>
<?php echo form_open('ValidationController/index'); ?>

<div><input id="btn_loginAdmin" name="btn_loginAdmin" type="Submit" value="Admin" /></div>

<h1>Judging Application</h1>

<h3>Username</h3>
<input type="text" name="username" value="" size="50" />

<h3>Password</h3>
<input type="text" name="password" value="" size="50" />

<div><input id="btn_login" name="btn_login" type="Submit" value="Login" /></div>


</form>

</body>
</html>
