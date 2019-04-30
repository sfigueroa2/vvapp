<!DOCTYPE html>
<html>
<head>
<title>Delete Judge</title>
</head>
<body>
<div id="container">
<div id="wrapper">
<h1>Delete Judge</h1><hr/>
<div id="menu">
<p><b>Select Judge</b></p>
<!--====== Displaying Fetched Names from Database in Links ========-->
<ol>
<?php foreach ($Judges as $Judge): ?>
<li><a href="<?php echo base_url() . "index.php/AdminController/showJudgesName/" . $Judge->JudgeName; ?>"><?php echo $Judge->JudgeName; ?></a>
</li><?php endforeach; ?>
</ol>
</div>
<div id="detail">
<!--====== Displaying Fetched Details from Database ========-->
<?php foreach ($single_Judge as $Judge): ?>
<p><b>Administrator Details</b></p>
<p><?php echo "Admin Name: ".$Judge->JudgeName; ?></p>
<p><?php echo "Admin Password :".$Judge->JudgePass; ?></p>
<!--====== Delete Button ========-->
<a href="<?php echo base_url() . "index.php/AdminController/DeleteJudge/" . $Judge->JudgeName; ?>">
<button>Delete Judge</button></a>
<?php endforeach; ?>
</div>
</div>
</div>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManageJudges'">Back to Manage Judges</button></p>
</body>
</html>
