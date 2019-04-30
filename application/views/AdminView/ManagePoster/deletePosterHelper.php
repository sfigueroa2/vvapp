<html>
<head>
<title>Delete Posters</title>
</head>
<body>
  <?php if (empty($poster)) { ?>
  <CENTER><h3 style="color:black;">Poster Not on Record</h3></CENTER><br>
  <?php } ?>
  <?php echo validation_errors(); ?>
  <div id="detail">
  <?php foreach ($poster as $p): ?>
  <p><b>Poster Details</b></p>
  <p><?php echo "PosterID: ".$p->PosterID; ?></p>
  <p><?php echo "SessionID: ".$p->SessionID; ?></p>
  <p><?php echo "Poster Title: ".$p->Title; ?></p>
  <p><?php echo "Author: ".$p->SFirst." ".$p->SLast; ?></p>
 
  <a href="<?php echo base_url() . "index.php/AdminController/DeletePosterHelper/" . $p->PosterID; ?>">
  <button>Delete</button></a>
  <?php endforeach; ?>
  </div>
</body>
</html>
