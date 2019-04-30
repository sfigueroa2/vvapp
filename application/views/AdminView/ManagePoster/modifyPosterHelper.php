<html>
<head>
<title>Modify Posters</title>
</head>
<body>
  <?php if (empty($poster)) { ?>
  <CENTER><h3 style="color:black;">Poster Not on Record</h3></CENTER><br>
  <?php } ?>
  <?php echo validation_errors(); ?>
  <div id="detail">
    <?php foreach ($poster as $p): ?>
    <form method="post" action="<?php echo base_url() . "index.php/AdminController/ModifyPosterHelper"?>">
    <label id="hide">Poster Number: <?php echo $p->PosterID; ?></label>
    <input type="hidden" id="hide" name="pid" value="<?php echo $p->PosterID; ?>">
    <p><label>Session ID: </label>
    <input type="text" name="psid" value="<?php echo $p->SessionID; ?>">
    <p><label>Title: </label>
    <input type="text" name="ptitle" value="<?php echo $p->Title; ?>">
    <p><label>Author First Name: </label>
    <input type="text" name="pfirst" value="<?php echo $p->SFirst; ?>">
    <p><label>Author Last Name: </label>
    <input type="text" name="plast" value="<?php echo $p->SLast; ?>">
    <p><label>Author Email: </label>
    <input type="text" name="pemail" value="<?php echo $p->SEmail; ?>">
    <p><label>Mentor: </label>
    <input type="text" name="pmentor" value="<?php echo $p->Mentor; ?>">
    <p><label>Mentor Email: </label>
    <input type="text" name="pcategory" value="<?php echo $p->MEmail; ?>">
    <p><label>Judging Category: </label>
    <input type="text" name="pmemail" value="<?php echo $p->JudgingCategory; ?>">
    <p><label>Type: </label>
    <input type="text" name="ptype" value="<?php echo $p->Type; ?>">
    <p><input type="submit" id="submit" name="dsubmit" value="Update">
    </form>
    <?php endforeach; ?>
  </div>
</body>
</html>
