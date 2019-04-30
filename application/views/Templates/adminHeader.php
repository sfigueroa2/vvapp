<html>
<head>
<title>Admin Menu</title>
</head>


<?php
if (isset($this->session->userdata['logged_inA'])) {
    $username = ($this->session->userdata['logged_inA']['AdminName']);
    echo "Currenlty logged in as: <b id='welcome'>" . $username . "</b>";

}
?>
<body>
        <?php echo form_open('ValidationController/AdminIndex'); ?>
        <button onclick="location.href='<?php echo base_url();?>index.php/ValidationController/logoutAdmin'">Logout</button>
</body>
</html>

