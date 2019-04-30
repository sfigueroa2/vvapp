<?php echo validation_errors(); ?>
<?php echo form_open('PosterController/ScorePoster/'.$PosterID);
echo '<p>Judge ID: '.$JudgeID;
echo '<p>Poster ID: '.$PosterID;
echo br(2);
echo 'Criteria 1.';
echo br(1);
echo form_radio('Criteria1', '2'). "Needs Improvement ";
echo form_radio('Criteria1', '2'). "Satisfactory ";
echo form_radio('Criteria1', '3'). "Very Good ";
echo form_radio('Criteria1', '4'). "Outstanding ";
echo br(2);
echo'Criteria 2.';
echo br(1);
echo form_radio('Criteria2', '1'). "Needs Improvement ";
echo form_radio('Criteria2', '2'). " Satisfactory ";
echo form_radio('Criteria2', '3'). " Very Good ";
echo form_radio('Criteria2', '4'). " Outstanding ";
echo br(2);
echo'Criteria 3.';
echo br(1);
echo form_radio('Criteria3', '1'). "Needs Improvement ";
echo form_radio('Criteria3', '2'). " Satisfactory ";
echo form_radio('Criteria3', '3'). " Very Good ";
echo form_radio('Criteria3', '4'). " Outstanding ";
echo br(2);
echo 'Criteria 4.';
echo br(1);
echo form_radio('Criteria4', '1'). "Needs Improvement ";
echo form_radio('Criteria4', '2'). " Satisfactory ";
echo form_radio('Criteria4', '3'). " Very Good ";
echo form_radio('Criteria4', '4'). " Outstanding ";
echo br(2);
echo 'Criteria 5.';
echo br(1);
echo form_radio('Criteria5', '1'). " Needs Improvement ";
echo form_radio('Criteria5', '2'). " Satisfactory ";
echo form_radio('Criteria5', '3'). " Very Good ";
echo form_radio('Criteria5', '4'). " Outstanding ";
echo br(2);
echo 'Criteria 6.';
echo br(1);
echo form_radio('Criteria6', '1'). " Needs Improvement ";
echo form_radio('Criteria6', '2'). " Satisfactory ";
echo form_radio('Criteria6', '3'). " Very Good ";
echo form_radio('Criteria6', '4'). " Outstanding ";
echo br(2);
echo 'Criteria 7.';
echo br(1);
echo form_radio('Criteria7', '1'). " Needs Improvement ";
echo form_radio('Criteria7', '2'). " Satisfactory ";
echo form_radio('Criteria7', '3'). " Very Good ";
echo form_radio('Criteria7', '4'). " Outstanding ";
echo br(2);
echo 'Criteria 8.';
echo br(1);
echo form_radio('Criteria8', '1'). " Needs Improvement ";
echo form_radio('Criteria8', '2'). " Satisfactory ";
echo form_radio('Criteria8', '3'). " Very Good ";
echo form_radio('Criteria8', '4'). " Outstanding ";
echo br(2);
echo 'Criteria 9.';
echo br(1);
echo form_radio('Criteria9', '1'). " Needs Improvement ";
echo form_radio('Criteria9', '2'). " Satisfactory ";
echo form_radio('Criteria9', '3'). " Very Good ";
echo form_radio('Criteria9', '4'). " Outstanding ";
echo br(2);
echo 'Criteria 10.';
echo br(1);
echo form_radio('Criteria10', '1'). " Needs Improvement ";
echo form_radio('Criteria10', '2'). " Satisfactory ";
echo form_radio('Criteria10', '3'). " Very Good ";
echo form_radio('Criteria10', '4'). " Outstanding ";
echo br(2);
echo 'Criteria 11.';
echo br(1);
echo form_radio('Criteria11', '1'). " Needs Improvement ";
echo form_radio('Criteria11', '2'). " Satisfactory ";
echo form_radio('Criteria11', '3'). " Very Good ";
echo form_radio('Criteria11', '4'). " Outstanding ";
echo br(2);
echo 'Criteria 12.';
echo br(1);
echo form_radio('Criteria12', '1'). " Needs Improvement ";
echo form_radio('Criteria12', '2'). " Satisfactory ";
echo form_radio('Criteria12', '3'). " Very Good ";
echo form_radio('Criteria12', '4'). " Outstanding ";
echo br(2);
echo 'Criteria 13';
echo br(1);
echo form_radio('Criteria13', '1'). " Needs Improvement ";
echo form_radio('Criteria13', '2'). " Satisfactory ";
echo form_radio('Criteria13', '3'). " Very Good ";
echo form_radio('Criteria13', '4'). " Outstanding ";
echo br(2);
      echo form_hidden('PosterID', $PosterID);
      echo form_hidden('JudgeID', $JudgeID);

      //echo form_hidden('JudgeID', $this->session->userdata['logged_in']['uid']);

?>
    <?php echo "Comments:"; ?>
    <input type="input" name="Comments" /><br />
    <input type="submit" name="submit" value="Submit" />






</form>
