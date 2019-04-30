<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
<?php
    if ($curr_session != 'N') {
            echo 'Current session: '.$curr_session; //  Displaying Selected Value
    }
    if ($curr_session == 'N') {
      echo 'No Currenlty Active Sessions.'; //  Displaying Selected Value
    }
?>
<h4>Display All Poster Records From Database</h4>
 <table>
  <tr>
    <td><strong>Action</strong></td>
    <td><strong>Poster ID</strong></td>
    <td><strong>Title</strong></td>
    <td><strong>Judging Category</strong></td>
    <td><strong>Author</strong></td>
    <td><strong>Mentor</strong></td>

 </tr>
  <?php foreach($Posters as $Poster){?>
  <tr>
      <td><button><a href="<?php echo site_url('PosterController/ScorePoster/'. $Poster->PosterID); ?>">Judge Poster</a></button></td>
      <td><?php echo $Poster->PosterID;?></td>
      <td><?php echo $Poster->Title;?></td>
      <td><?php echo $Poster->JudgingCategory;?></td>
      <td><?php echo $Poster->SFirst." ".$Poster->SLast;?></td>
      <td><?php echo $Poster->Mentor;?></td>
      <td><?php echo $Poster->SessionID;?></td>


   </tr>
  <?php }?>
</table>

</body>
<p><button onclick="location.href='<?php echo base_url();?>index.php/PosterController/index'">Back to Judge Menu</button></p>

</html>
