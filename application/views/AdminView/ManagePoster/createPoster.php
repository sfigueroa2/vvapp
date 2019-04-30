<html>
<head>
<title>Insert New Poster</title>
</head>
<body>

<div id="container">
<?php echo form_open('AdminController/CreatePoster'); ?>
<h1>Insert New Poster</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:black;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php echo form_label('Poster ID:'); ?> <?php echo form_error('did'); ?><br />
<?php echo form_input(array('id' => 'did', 'name' => 'did')); ?><br />

<?php echo form_label('Session ID:'); ?> <?php echo form_error('dsid'); ?><br />
<?php echo form_input(array('id' => 'dsid', 'name' => 'dsid')); ?><br />

<?php echo form_label('Title:'); ?> <?php echo form_error('dtitle'); ?><br />
<?php echo form_input(array('id' => 'dtitle', 'name' => 'dtitle')); ?><br />

<?php echo form_label('Author First Name:'); ?> <?php echo form_error('dfirst'); ?><br />
<?php echo form_input(array('id' => 'dfirst', 'name' => 'dfirst')); ?><br />

<?php echo form_label('Author Last Name:'); ?> <?php echo form_error('dlast'); ?><br />
<?php echo form_input(array('id' => 'dlast', 'name' => 'dlast')); ?><br />

<?php echo form_label('Author Email: '); ?> <?php echo form_error('demail'); ?><br />
<?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br />

<?php echo form_label('Mentor Name:'); ?> <?php echo form_error('dmentor'); ?><br />
<?php echo form_input(array('id' => 'dmentor', 'name' => 'dmentor')); ?><br />

<?php echo form_label('Mentor Email: '); ?> <?php echo form_error('dmemail'); ?><br />
<?php echo form_input(array('id' => 'dmemail', 'name' => 'dmemail')); ?><br />

<?php echo form_label('Judging Category: '); ?> <?php echo form_error('djcategory'); ?><br />
<?php echo form_input(array('id' => 'djcategory', 'name' => 'djcategory')); ?><br />

<?php echo form_label('Type: '); ?> <?php echo form_error('dtype'); ?><br />
<?php echo form_input(array('id' => 'dtype', 'name' => 'dtype')); ?><br />

<?php echo form_label('Term: '); ?> <?php echo form_error('dterm'); ?><br />
<?php echo form_input(array('id' => 'dterm', 'name' => 'dterm')); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManagePoster'">Back to Manage Judges</button></p>

</body>
</html>
