<html>
<head>
<title>Insert New Judge</title>
</head>
<body>

<div id="container">
<?php echo form_open('AdminController/CreateJudge'); ?>
<h1>Insert New Judge</h1><hr/>

<?php if (isset($message)) { ?>
<CENTER><h3 style="color:black;">Data inserted successfully</h3></CENTER><br>
<?php } ?>

<?php echo form_label('Judge Name :'); ?> <?php echo form_error('aname'); ?><br />
<?php echo form_input(array('id' => 'jname', 'name' => 'jname')); ?><br />

<?php echo form_label('Judge Password :'); ?> <?php echo form_error('apass'); ?><br />
<?php echo form_input(array('id' => 'jpass', 'name' => 'jpass')); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>

<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManageJudges'">Back to Manage Judges</button></p>
</body>
</html>
