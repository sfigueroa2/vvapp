<html>
<head>
<title>Insert New Administrator</title>
</head>
<body>

<div id="container">
<?php echo form_open('AdminController/CreateAdmin'); ?>
<h1>Insert New Administrator</h1><hr/>

<?php if (isset($message)) { ?>
<CENTER><h3 style="color:black;">Data inserted successfully</h3></CENTER><br>
<?php } ?>

<?php echo form_label('Admin Name :'); ?> <?php echo form_error('aname'); ?><br />
<?php echo form_input(array('id' => 'aname', 'name' => 'aname')); ?><br />

<?php echo form_label('Admin Password :'); ?> <?php echo form_error('apass'); ?><br />
<?php echo form_input(array('id' => 'apass', 'name' => 'apass')); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>

<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManageAdmin'">Back to Manage Admin</button></p>
</body>
</html>
