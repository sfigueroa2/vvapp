<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminController extends CI_Controller{

      public function __construct(){
          parent::__construct();
          $this->load->library('session');
          $this->load->library('form_validation');
          $this->load->helper('url');
          $this->load->database();
          $this->load->helper('html');
          $this->load->model('Judge_Model');


      }
      public function index(){
         if (isset($this->session->userdata['logged_inA'])) {
           $this->load->view('Templates/adminHeader');
           $this->load->view('AdminView/adminMenu');
         }
      }
      public function ManageAdmin(){
          $this->load->view('Templates/adminHeader');
          $this->load->view('AdminView/ManageAdmin/manageAdmin');
      }
      public function ManageJudges(){
          $this->load->view('Templates/adminHeader');
          $this->load->view('AdminView/ManageJudge/manageJudges');
      }
      //SESSIONS
      public function SetSession(){
          $this->load->view('AdminView/session');
          $id= $this->input->post('session');
          $this->Judge_Model->set_session($id);
      }
      //VIEW JUDGE LIST
      public function JudgeList(){
         $this->data['Judges'] = $this->Judge_Model->getJudges();
         $this->load->view('AdminView/ManageJudge/judgeList', $this->data);
     }
      //VIEW POSTERS
      public function PosterList(){
          $this->data['Posters'] = $this->Judge_Model->getAllPosters();
          $this->load->view('AdminView/ManagePoster/posterList', $this->data);
      }
      public function ManagePoster(){
          $this->load->view('AdminView/ManagePoster/managePoster');
      }
      //VIEW POSTERS
      public function AdminList(){
          $this->data['Admins'] = $this->Judge_Model->getAdmin();
          $this->load->view('AdminView/ManageAdmin/adminList', $this->data);
      }
        //CREATE NEW JUDGE
      public function CreateJudge(){
            //Validating Fields
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_rules('jname', 'Admin Name', 'required');
            $this->form_validation->set_rules('jpass', 'Admin Pass', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('AdminView/ManageJudge/CreateJudge');
            } else {
                //Setting values for tabel columns
                $data = array(
                'JudgeName' => $this->input->post('jname'),
                'JudgePass' => $this->input->post('jpass'),
                );
                $this->Judge_Model->insertJudge($data); //Transfering data to Model
                $data['message'] = 'Data Inserted Successfully';
                $this->load->view('AdminView/ManageJudge/CreateJudge', $data);
            }
        }
        public function CreateAdmin(){
            //Validating Fields
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_rules('aname', 'Admin Name', 'required');
            $this->form_validation->set_rules('apass', 'Admin Pass', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('AdminView/ManageAdmin/CreateAdmin');
            } else {
                //Setting values for tabel columns
                $data = array(
                'AdminName' => $this->input->post('aname'),
                'AdminPass' => $this->input->post('apass'),
                );
                $this->Judge_Model->insertAdmin($data); //Transfering data to Model
                $data['message'] = 'Data Inserted Successfully';
                $this->load->view('AdminView/ManageAdmin/CreateAdmin', $data);
            }
        }
        public function CreatePoster(){
            //Validating Fields
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_rules('did', 'Poster ID', 'required');
            $this->form_validation->set_rules('dsid', 'Session ID', 'required');
            $this->form_validation->set_rules('dtitle', 'Title', 'required');
            $this->form_validation->set_rules('dfirst', 'First Name', 'required');
            $this->form_validation->set_rules('dlast', 'Last Name', 'required');
            $this->form_validation->set_rules('dmentor', 'Mentor', 'required');
            $this->form_validation->set_rules('dcategory', 'Category', 'required');
            $this->form_validation->set_rules('djcategory', 'Judge Category', 'required');
            $this->form_validation->set_rules('dtype', 'Type', 'required');
            $this->form_validation->set_rules('dterm', 'Term', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('AdminView/ManagePoster/createPoster');
            } else {
                $this->Judge_Model->insertPoster(); //Transfering data to Model
                $data['message'] = 'Data Inserted Successfully';
                $this->load->view('AdminView/ManagePoster/createPoster', $data);
            }
        }
        function DeleteAdmin() {
            $id = $this->uri->segment(3);
            $this->Judge_Model->removeAdmin($id);
            $this->showAdminName();
        }
        function showAdminName() {
            $id = $this->uri->segment(3);
            $data['Admins'] = $this->Judge_Model->showAdmins();
            $data['single_Admin'] = $this->Judge_Model->showAdminName($id);
            $this->load->view('AdminView/ManageAdmin/deleteAdmin', $data);

        }
        function showAdminNameU() {
            $id = $this->uri->segment(3);
            $data['Admins'] = $this->Judge_Model->showAdmins();
            $data['single_Admin'] = $this->Judge_Model->showAdminName($id);
            $this->load->view('AdminView/ManageAdmin/updateAdmin', $data);

        }
        function UpdateAdmin() {
            $id= $this->input->post('did');
            $data = array(
                'AdminName' => $this->input->post('aname'),
                'AdminPass' => $this->input->post('apass'),
            );
            $this->Judge_Model->updateAdmin($id,$data);
            $this->showAdminNameU();
        }
        function DeleteJudge() {
            $id = $this->uri->segment(3);
            $this->Judge_Model->removeJudge($id);
            $this->showJudgeName();
        }
        function showJudgeName() {
            $id = $this->uri->segment(3);
            $data['Judges'] = $this->Judge_Model->showJudges();
            $data['single_Judge'] = $this->Judge_Model->showJudgeName($id);
            $this->load->view('AdminView/ManageJudge/deleteJudge', $data);
        }
        function showJudgeNameU() {
            $id = $this->uri->segment(3);
            $data['Judges'] = $this->Judge_Model->showJudges();
            $data['single_Judge'] = $this->Judge_Model->showJudgeName($id);
            $this->load->view('AdminView/ManageJudge/updateJudge', $data);
        }
        function UpdateJudge() {
            $id= $this->input->post('did');
            $data = array(
                'JudgeName' => $this->input->post('jname'),
                'JudgePass' => $this->input->post('jpass'),
            );
            $this->Judge_Model->updateJudge($id,$data);
            $this->showJudgeNameU();
        }
        function DeletePoster(){
          $this->load->view('AdminView/ManagePoster/deletePoster');
          if ($this->input->post('snumber')) {
                $pnumber = $this->input->post('pnumber');
                $data['poster'] = $this->Judge_Model->searchByPosterId($pnumber);
                $this->load->view('AdminView/ManagePoster/deletePosterHelper',$data);
          }
          if ($this->input->post('semail')) {
              $pemail = $this->input->post('pemail');
              $data['poster'] = $this->Judge_Model->searchByEmail($pemail);
              $this->load->view('AdminView/ManagePoster/deletePosterHelper',$data);
            }
        }
        function DeletePosterHelper(){
            $PosterID = $this->uri->segment(3);
            $this->Judge_Model->removePoster($PosterID);
            $this->DeletePoster();
        }
        function ModifyPosterHelper() {
            $id= $this->input->post('pid');
            //print_r($id);
            $this->Judge_Model->modifyPoster($id);
            $this->ModifyPoster();
        }
        function ModifyPoster(){
            $this->load->view('AdminView/ManagePoster/modifyPoster');
            if ($this->input->post('snumber')) {
                  $pnumber = $this->input->post('pnumber');
                  $data['poster'] = $this->Judge_Model->searchByPosterId($pnumber);
                  $this->load->view('AdminView/ManagePoster/modifyPosterHelper',$data);
            }
            if ($this->input->post('semail')) {
                $pemail = $this->input->post('pemail');
                $data['poster'] = $this->Judge_Model->searchByEmail($pemail);
                $this->load->view('AdminView/ManagePoster/modifyPosterHelper',$data);
              }
        }
        function DeleteTables(){
            $this->load->view('AdminView/ManageTerms/deleteTables');
            if ($this->input->post('no')) {
                redirect('AdminController/index');
          }
          if ($this->input->post('yes')) {
                $this->Judge_Model->deleteTables();
                redirect('AdminController/index');
            }
        }
        function ImportPosters(){
            $this->load->view('AdminView/ManageTerms/importPosters');
            if (isset($_POST["import"])) {
                $data = $this->Judge_Model->importPosters();
            }
            if (isset($_POST["cancel"])) {
                redirect('AdminController/index');
            }
        }
        function ImportJudges(){
            $this->load->view('AdminView/ManageTerms/importJudges');
            if (isset($_POST["import"])) {
                $data = $this->Judge_Model->importJudges();                  
            }
            if (isset($_POST["cancel"])) {
                redirect('AdminController/index');
            }
        }
        function ManageArchive(){
            $this->load->view('AdminView/ManageArchive/archiveMenu');

        }
        function RawScores(){
            $data['rawscores'] = $this->Judge_Model->exportRawScores();
            $this->load->view('AdminView/ManageArchive/rawScores',$data);
        }
        function JudgeScoreTimes(){
            $data['judgetimes'] = $this->Judge_Model->judgeScoreTimes();
            $this->load->view('AdminView/ManageArchive/judgeScoreTimes',$data);
        }
        function FinalScores(){
            $data['finalscores'] = $this->Judge_Model->finalScores();
            $this->load->view('AdminView/ManageArchive/finalScores',$data);

        }
}
