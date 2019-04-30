<!DOCTYPE html>
<html>
<head>
<title>Delete Administrator</title>
</head>
<body>
<div id="container">
<div id="wrapper">
<h1>Delete Administrator</h1><hr/>
<div id="menu">
<p><b>Select Administrator</b></p>
<!--====== Displaying Fetched Names from Database in Links ========-->
<ol>
<?php foreach ($Admins as $Admin): ?>
<li><a href="<?php echo base_url() . "index.php/AdminController/showAdminName/" . $Admin->AdminName; ?>"><?php echo $Admin->AdminName; ?></a>
</li><?php endforeach; ?>
</ol>
</div>
<div id="detail">
<!--====== Displaying Fetched Details from Database ========-->
<?php foreach ($single_Admin as $Admin): ?>
<p><b>Administrator Details</b></p>
<p><?php echo "Admin Name: ".$Admin->AdminName; ?></p>
<p><?php echo "Admin Password :".$Admin->AdminPass; ?></p>
<!--====== Delete Button ========-->
<a href="<?php echo base_url() . "index.php/AdminController/DeleteAdmin/" . $Admin->AdminName; ?>">
<button>Delete Administrator</button></a>
<?php endforeach; ?>
</div>
</div>
</div>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManageAdmin'">Back to Manage Admin</button></p>
</body>
</html>
