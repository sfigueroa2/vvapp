<?php
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['JudgeName']);
    echo "Currenlty logged in as: <b id='welcome'>" . $username . "</b>";

}
?>

<html>
     <head>
             <title>Judging App</title>
     </head>
     <body>

       <p><button onclick="location.href='<?php echo base_url();?>index.php/ValidationController/logout'">Logout</button></p>
