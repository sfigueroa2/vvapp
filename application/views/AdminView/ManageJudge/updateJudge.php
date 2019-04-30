<html>
<head>
<title>Update Judge</title>
</head>
<body>
<div id="container">
<div id="wrapper">
<h1>Update Judge</h1><hr/>
<div id="menu">
<p>Click On an Judge</p>
<!-- Fetching Names Of All Students From Database -->
<ol>
<?php foreach ($Judges as $Judge): ?>
<li><a href="<?php echo base_url() . "index.php/AdminController/showJudgeNameU/" . $Judge->JudgeName; ?>"><?php echo $Judge->JudgeName; ?></a></li>
<?php endforeach; ?>
</ol>
</div>
<div id="detail">
<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
<?php foreach ($single_Judge as $Judge): ?>
<p>Edit Detail & Click Update Button</p>
<form method="post" action="<?php echo base_url() . "index.php/AdminController/UpdateJudge"?>">
<label id="hide">Id :</label>
<input type="text" id="hide" name="did" value="<?php echo $Judge->JudgeName; ?>">
<label>Name :</label>
<input type="text" name="jname" value="<?php echo $Judge->JudgeName; ?>">
<label>Password :</label>
<input type="text" name="jpass" value="<?php echo $Judge->JudgePass; ?>">
<input type="submit" id="submit" name="dsubmit" value="Update">
</form>
<?php endforeach; ?>
</div>
</div>
</div>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManageJudges'">Back to Manage Judges</button></p>
</body>
</html>
