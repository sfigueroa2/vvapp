<html>
<head>
<title>Update Administrators</title>
</head>
<body>
<div id="container">
<div id="wrapper">
<h1>Update Administrators</h1><hr/>
<div id="menu">
<p>Click On an Admin</p>
<!-- Fetching Names Of All Students From Database -->
<ol>
<?php foreach ($Admins as $Admin): ?>
<li><a href="<?php echo base_url() . "index.php/AdminController/showAdminNameU/" . $Admin->AdminName; ?>"><?php echo $Admin->AdminName; ?></a></li>
<?php endforeach; ?>
</ol>
</div>
<div id="detail">
<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
<?php foreach ($single_Admin as $Admin): ?>
<p>Edit Detail & Click Update Button</p>
<form method="post" action="<?php echo base_url() . "index.php/AdminController/UpdateAdmin"?>">
<label id="hide">Id :</label>
<input type="text" id="hide" name="did" value="<?php echo $Admin->AdminName; ?>">
<label>Name :</label>
<input type="text" name="aname" value="<?php echo $Admin->AdminName; ?>">
<label>Password :</label>
<input type="text" name="apass" value="<?php echo $Admin->AdminPass; ?>">
<input type="submit" id="submit" name="dsubmit" value="Update">
</form>
<?php endforeach; ?>
</div>
</div>
</div>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManageAdmin'">Back to Manage Admin</button></p>
</body>
</html>
