<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Judge_Model extends CI_Model{
  function __construct(){
    parent::__construct();
    $this->load->database();
  }
  function viewAllPosters($JudgeID, $PSess){ //Retrieve Posters in current Session not judged
    $session = "\"$PSess\"";
    $sql = 'SELECT * FROM PosterA AS P WHERE P.SessionID = '. $session .' AND NOT EXISTS (SELECT * FROM Scores AS S WHERE P.PosterID = S.PosterID AND S.JudgeID = '.$JudgeID.')';
    $query = $this->db->query($sql);
    return $query->result();
  }
  function viewJudgedPosters($JudgeID){ //Retrieve Posters Judged by JudgeID
    $sql = 'SELECT * FROM PosterA AS P WHERE EXISTS (SELECT * FROM Scores AS S WHERE P.PosterID = S.PosterID AND S.JudgeID = '.$JudgeID.') ';
    $query = $this->db->query($sql);
    return $query->result();
  }
  function getAdmin(){
    $this->db->select("AdminID,AdminName,AdminPass");
    $this->db->from('Admin');
    $query = $this->db->get();
    return $query->result();
  }
  function getJudges(){
    $this->db->select("JudgeID,JudgeName,JudgePass");
    $this->db->from('Judge');
    $query = $this->db->get();
    return $query->result();
  }
  function jid($JudgeName){
    $array = array('JudgeName'=> $JudgeName);
    $this->db->select("JudgeID");
    $this->db->from('Judge');
    $this->db->where($array);
    $query = $this->db->get();
    return $query->result();
  }
  function getAllPosters(){
    $this->db->select("idNumber, PosterID, SessionID, Title, SFirst, SLast, SEmail, Mentor, MEmail, JudgingCategory, Term");
    $this->db->from('PosterA');
    $query = $this->db->get();
    return $query->result();
  }
  public function get_Posters_session($PSess){
    $array = array('SessionID'=> $PSess);
    $this->db->select("PosterID,Title,JudgingCategory, SFirst, SLast, Mentor");
    $this->db->from('PosterA');
    $this->db->where($array);
    $query = $this->db->get();
    return $query->result_array();
  }
  function insertJudge($data){
    $this->db->insert('Judge', $data);
  }
  function insertAdmin($data){
    $this->db->insert('Admin', $data);
  }
  function insertPoster(){
    $data = array(
      'PosterID' => $this->input->post('did'),
      'SessionID' => $this->input->post('dsid'),
      'Title' => $this->input->post('dtitle'),
      'SFirst' => $this->input->post('dfirst'),
      'SLast' => $this->input->post('dlast'),
      'Semail' => $this->input->post('demail'),
      'Mentor' => $this->input->post('dmentor'),
      'Memail' => $this->input->post('dmemail'),
      'JudgingCategory' => $this->input->post('djcategory'),
      'Type' => $this->input->post('dtype'),
      'Term' => $this->input->post('dterm'),
    );
    $this->db->insert('PosterA', $data);
  }
  function update($data1){
    $this->db->insert('Session', $data);
  }
  function set_session($new_sess){
    if($new_sess == 'A'){
      $data = array(
        array('Session' => 'A','Active' => 1),
        array('Session' => 'B','Active' => 0),
        array('Session' => 'C','Active' => 0),
        array('Session' => 'D','Active' => 0),
        array('Session' => 'N','Active' => 0)
      );
      $this->db->update_batch('Session', $data, 'Session');
    }
    if($new_sess == 'B'){
      $data = array(
        array('Session' => 'A','Active' => 0),
        array('Session' => 'B','Active' => 1),
        array('Session' => 'C','Active' => 0),
        array('Session' => 'D','Active' => 0),
        array('Session' => 'N','Active' => 0)
      );
      $this->db->update_batch('Session', $data, 'Session');
    }
    if($new_sess == 'C'){
      $data = array(
        array('Session' => 'A','Active' => 0),
        array('Session' => 'B','Active' => 0),
        array('Session' => 'C','Active' => 1),
        array('Session' => 'D','Active' => 0),
        array('Session' => 'N','Active' => 0)
      );
      $this->db->update_batch('Session', $data, 'Session');
    }
    if($new_sess == 'D'){
      $data = array(
        array('Session' => 'A','Active' => 0),
        array('Session' => 'B','Active' => 0),
        array('Session' => 'C','Active' => 0),
        array('Session' => 'D','Active' => 1),
        array('Session' => 'N','Active' => 0)
      );
      $this->db->update_batch('Session', $data, 'Session');
    }
    if($new_sess == 'N'){
      $data = array(
        array('Session' => 'A','Active' => 0),
        array('Session' => 'B','Active' => 0),
        array('Session' => 'C','Active' => 0),
        array('Session' => 'D','Active' => 0),
        array('Session' => 'N','Active' => 1)
      );
      $this->db->update_batch('Session', $data, 'Session');
    }
  }
  function get_user($usr, $pwd){
    $sql = "select * from Judge where JudgeName = '" . $usr . "' and JudgePass = '" . $pwd . "' ''";
    $query = $this->db->query($sql);
    return $query->num_rows(); //On returns a number not results
  }
  function get_user_id($usr, $pwd){
    $sql = "select JudgeID from Judge where JudgeName = '" . $usr . "' and JudgePass = '" . $pwd . "' ''";
    $query = $this->db->query($sql);
    return $query->result(); //On returns a number not results
  }
  function get_userinfo($usr, $pwd){
    $array = array('JudgeName' => $username, 'JudgePass' => $password);
    $this->db->where($array);
    $query = $this->db->get('Judge');
    $result = $query->result_array();
    return $result;
  }
  public function get_Posters($PSess){ //get posters for session
    $array = array('SessionID'=> $PSess);
    $this->db->where($array);
    $query = $this->db->get('PosterA');
    return $query->result_array();
  }
  public function get_PostersJID($JudgeID){ //get posters  Judged
    $array = array('JudgeID'=> $JudgeID);
    $this->db->select("PosterID");
    $this->db->where($array);
    $query = $this->db->get('Scores');
    return $query->result_array();
  }
  public function FindPoster($PosterID = FALSE){
    if ($PosterID === FALSE){
      $query = $this->db->get('PosterA');
      return $query->result_array();
    }
    $query = $this->db->get_where('Poster', array('PosterID' => $PosterID));
    return $query->row_array();
  }
  public function Post_Score(){   //Insert Judge Scores to database
    $data = array(
      'PosterID' => $this->input->post('PosterID'),
      'JudgeID'=> $this->input->post('JudgeID'),
      'Criteria1'=> $this->input->post('Criteria1'),
      'Criteria2'=> $this->input->post('Criteria2'),
      'Criteria3'=> $this->input->post('Criteria3'),
      'Criteria4'=> $this->input->post('Criteria4'),
      'Criteria5'=> $this->input->post('Criteria5'),
      'Criteria6'=> $this->input->post('Criteria6'),
      'Criteria7'=> $this->input->post('Criteria7'),
      'Criteria8'=> $this->input->post('Criteria8'),
      'Criteria9'=> $this->input->post('Criteria9'),
      'Criteria10'=> $this->input->post('Criteria10'),
      'Criteria11'=> $this->input->post('Criteria11'),
      'Criteria12'=> $this->input->post('Criteria12'),
      'Criteria13'=> $this->input->post('Criteria13'),
      'Comments'=> $this->input->post('Comments'),
    );
    return $this->db->insert('Scores', $data);
  }
  //Update Judge Scores from database
  public function Update_Post_Score($JudgeID,$PosterID){
    $data = array(
      'Criteria1'=> $this->input->post('Criteria1'),
      'Criteria2'=> $this->input->post('Criteria2'),
      'Criteria3'=> $this->input->post('Criteria3'),
      'Criteria4'=> $this->input->post('Criteria4'),
      'Criteria5'=> $this->input->post('Criteria5'),
      'Criteria6'=> $this->input->post('Criteria6'),
      'Criteria7'=> $this->input->post('Criteria7'),
      'Criteria8'=> $this->input->post('Criteria8'),
      'Criteria9'=> $this->input->post('Criteria9'),
      'Criteria10'=> $this->input->post('Criteria10'),
      'Criteria11'=> $this->input->post('Criteria11'),
      'Criteria12'=> $this->input->post('Criteria12'),
      'Criteria13'=> $this->input->post('Criteria13'),
      'Comments'=> $this->input->post('Comments'),
    );
    $array = array('JudgeID' => $JudgeID, 'PosterID' => $PosterID);
    $this->db->set($data);
    $this->db->where($array);
    $this->db->update('Scores'); // gives UPDATE `PosterA` SET `array' WHERE `JudgeID` = $JudgeID
  }
  function get_Admin($usrA, $pwdA){
    $sql = "select * from Admin where AdminName = '" . $usrA . "' and AdminPass = '" . $pwdA . "' ''";
    $query = $this->db->query($sql);
    return $query->num_rows();
  }
  function get_Admin_id($usrA, $pwdA){
    $sql = "select AdminID from Admin where AdminName = '" . $usrA . "' and AdminPass = '" . $pwdA . "' ''";
    $query = $this->db->query($sql);
    return $query->result();
  }
  function Get_Session(){
    $q = $this->db->get_where('Session',array('Active' => 1));
    if($q->num_rows() > 0){
      return $q->result();
    }
    return array();
  }
  public function get_news($slug = FALSE){
    if ($slug === FALSE){
      $query = $this->db->get('news');
      return $query->result_array();
    }
    $query = $this->db->get_where('news', array('slug' => $slug));
    return $query->row_array();
  }
  // Function to Delete selected record from table name students.
  function removeAdmin($AdminName){
    $this->db->where('AdminName', $AdminName);//WHERE AdminName = $AdminName
    $this->db->delete('Admin'); // DELETE FROM Admin
  }
  // Function to select all from table name students.
  function showAdmins(){
    $query = $this->db->get('Admin');
    $query_result = $query->result();
    return $query_result;
  }
    // Function to select particular record from table name students.
  function showAdminName($data){
    $this->db->select('*');
    $this->db->from('Admin');
    $this->db->where('AdminName', $data);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  // Function to Delete selected record from table name students.
  function removeJudge($JudgeName){
    $this->db->where('JudgeName', $JudgeName);//WHERE AdminName = $AdminName
    $this->db->delete('Judge'); // DELETE FROM Admin
  }
  // Function to select all from table name students.
  function showJudges(){
    $query = $this->db->get('Judge');
    $query_result = $query->result();
    return $query_result;
  }
  // Function to select particular record from table name students.
  function showJudgeName($data){
    $this->db->select('*');
    $this->db->from('Judge');
    $this->db->where('JudgeName', $data);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  // Update Query For Selected Student
  function updateAdmin($id,$data){
    $this->db->where('AdminName', $id);
    $this->db->update('Admin', $data);
  }
  // Update Query For Selected Student
  function updateJudge($id,$data){
    $this->db->where('JudgeName', $id);
    $this->db->update('Judge', $data);
  }
  function removePoster($PosterID){
    $this->db->where('PosterID', $PosterID);
    $this->db->delete('PosterA');
  }
  function modifyPoster($id){
    $data = array(
      'PosterID' => $this->input->post('pid'),
      'SessionID' => $this->input->post('psid'),
      'Title' => $this->input->post('ptitle'),
      'SFirst' => $this->input->post('pfirst'),
      'SLast' => $this->input->post('plast'),
      'Semail' => $this->input->post('pemail'),
      'Mentor' => $this->input->post('pmentor'),
      'MEmail' => $this->input->post('pmemail'),
      'JudgingCategory' => $this->input->post('pjcategory'),
    );
    $this->db->where('PosterID', $id);
    $this->db->update('PosterA', $data);
  }
  function searchByPosterId($PosterID){ //Retreieve info by PosterID
    $sql = 'SELECT * FROM PosterA AS P WHERE P.PosterID = "'.$PosterID.'"';
    $query = $this->db->query($sql);
    return $query->result();
  }
  function searchByEmail($email){ //Retreieve info by email
    $sql = 'SELECT * FROM PosterA AS P WHERE P.SEmail = "'.$email.'"';
    $query = $this->db->query($sql);
    return $query->result();
  }
  function delete($pnumber){ //Retreieve info by email
    $sql = 'DELETE FROM PosterA WHERE PosterID = "'.$pnumber.'"';
    $query = $this->db->query($sql);
    return $query->result();
  }
  function deleteTables(){
    $this->db->truncate('PosterA');
    $this->db->truncate('Scores');
    $this->db->truncate('Judge');
  }
  function importPosters(){
    $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0) {
      $file = fopen($fileName, "r");
      while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
        $data = array(
          'ID' => $column[0],
          'idNumber' => $column[1],
          'PosterID' => $column[2],
          'SessionID' => $column[3],
          'Title' => $column[4],
          'SFirst' => $column[5],
          'SLast' => $column[6],
          'Semail' => $column[7],
          'Mentor' => $column[8],
          'Memail' => $column[9],
          'JudgingCategory' => $column[10],
          'Term' => $column[11],
        );
        $this->db->insert('PosterA', $data);
      }
    }
  }
  function importJudges(){
    $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0) {
      $file = fopen($fileName, "r");
      while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
        $data = array(
          'JudgeID' => $column[0],
          'JudgeName' => $column[1],
          'JudgePass' => $column[2],
          'JFirst' => $column[3],
          'JLast' => $column[4],
        );
        $this->db->insert('Judge', $data);
      }
    }
  }
  function exportRawScores(){
    $this->db->select('*');
    $this->db->from('Scores');
    $query = $this->db->get();
    return $query->result();
  }
  function judgeScoreTimes(){
    $sql = "SELECT J.JudgeID,J.JFirst,J.JLast,J.JudgeName, count(*) AS Times FROM Scores AS S LEFT JOIN Judge As J ON J.JudgeID=S.JudgeID GROUP BY J.JudgeName";
    $query = $this->db->query($sql);
    return $query->result();
  }
  function finalScores(){
    $sql = "SELECT ScoresID,PosterID, (AVG(Criteria1+Criteria2+Criteria3+Criteria4)+AVG(Criteria5+Criteria6+Criteria7+Criteria8)+ AVG(Criteria9+Criteria10+Criteria11+Criteria12+Criteria13)) 'Score'
    FROM Scores GROUP BY ScoresID";
    $query = $this->db->query($sql);
    return $query->result();
  }
}
