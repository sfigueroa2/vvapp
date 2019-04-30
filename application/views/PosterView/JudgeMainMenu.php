<html>
<head>
<title>Main Menu</title>
</head>
<body>
  <?php echo validation_errors(); ?>

<button onclick="location.href='<?php echo base_url();?>index.php/PosterController/Poster'">View All Posters</button>

<h2>List of Posters You have Judged</h2>
<?php //echo "Judge ID: ".$JudgeID; ?>
<br>
<?php
    if ($curr_session != 'N') {
            echo 'Current session: '.$curr_session; //  Displaying Selected Value
    }
    if ($curr_session == 'N') {
      echo 'No Currenlty Active Sessions.'; //  Displaying Selected Value
    }
?>

 <table>
  <tr>
    <td><strong>Action</strong></td>
    <td><strong>Poster ID</strong></td>
    <td><strong>Title</strong></td>
    <td><strong>Judging Category</strong></td>
    <td><strong>Author</strong></td>
 </tr>
 <?php foreach ($Poster as $Poster_item): ?>
 <tr>

   <td><button><a href="<?php echo site_url('PosterController/UpdateScorePoster/'.$Poster_item->PosterID); ?>">Update Score</a></button>
   <td><?php echo $Poster_item->PosterID;?></td>
   <td><?php echo $Poster_item->Title;?></td>
   <td><?php echo $Poster_item->JudgingCategory;?></td>
   <td><?php echo $Poster_item->SFirst." ".$Poster_item->SLast;?></td>
  </tr>
<?php endforeach; ?>
</table>
</body>
</html>
