
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Symposium Posters</title>
  </head>
  <body>

<h1>Symposium Posters</h1><hr>
 <table>
  <tr>
   <td><strong>Submission Number</strong></td>
   <td><strong>Poster ID</strong></td>
   <td><strong>Session ID</strong></td>
   <td><strong>Poster Title</strong></td>
   <td><strong>Poster Category</strong></td>
   <td><strong>Author Name</strong></td>
   <td><strong>Author Email</strong></td>
   <td><strong>Mentor</strong></td>
   <td><strong>Mentor Email</strong></td>
   <td><strong>Judging Category</strong></td>
   <td><strong>Term</strong></td>

 </tr>
  <?php foreach($Posters as $Poster){?>
  <tr>
      <td><?php echo $Poster->idNumber;?></td>
      <td><?php echo $Poster->PosterID;?></td>
      <td><?php echo $Poster->SessionID;?></td>
      <td><?php echo $Poster->Title;?></td>
      <td><?php echo $Poster->JudgingCategory;?></td>
      <td><?php echo $Poster->SFirst." ".$Poster->SLast;?></td>
      <td><?php echo $Poster->SEmail;?></td>
      <td><?php echo $Poster->Mentor;?></td>
      <td><?php echo $Poster->MEmail;?></td>
      <td><?php echo $Poster->JudgingCategory;?></td>
      <td><?php echo $Poster->Term;?></td>


   </tr>
  <?php }?>
</table>
</body>
<p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManagePoster'">Back to Manage Poster</button></p>

</html>
