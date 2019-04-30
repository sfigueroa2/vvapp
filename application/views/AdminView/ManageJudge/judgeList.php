
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Judge List</title>
  </head>
  <body>

<h1>Judges List</h1><hr/>
 <table>
  <tr>
   <td><strong>Judge Id</strong></td>
   <td><strong>Judge Name</strong></td>
   <td><strong>Judge Password</strong></td>

 </tr>
  <?php foreach($Judges as $Judge){?>
  <tr>
      <td><?php echo $Judge->JudgeID;?></td>
      <td><?php echo $Judge->JudgeName;?></td>
      <td><?php echo $Judge->JudgePass;?></td>

   </tr>
  <?php }?>
</table>
</body>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManageJudges'">Back to Manage Judges</button></p>

</html>
