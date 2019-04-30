<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PosterController extends CI_Controller{
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
            $this->JudgedPoster();
       }
       public function JudgedPoster(){ //All Posters Judged by JudgeID
           if (isset($this->session->userdata['logged_in'])) {
             $i=0;
             $data['Session'] =  $this->Judge_Model->Get_Session();
             foreach ($data as $row);{
                  $PSess=$row[$i]->Session;
             }
            $data['curr_session'] = $PSess;
            $JudgeName = ($this->session->userdata['logged_in']['JudgeName']);
            $JudgeID = $this->Judge_Model->jid($JudgeName);
            $JudgeID = $JudgeID[0]->JudgeID;
            $data['Poster'] = $this->Judge_Model->viewJudgedPosters($JudgeID);
            $this->load->view('Templates/judgeHeader',$data);
             $this->load->view('PosterView/JudgeMainMenu',$data);
         }
       }
       public function Poster(){
           if (isset($this->session->userdata['logged_in'])) {
             $i=0;
             $data['Session'] =  $this->Judge_Model->Get_Session();
             foreach ($data as $row);{
                  $PSess=$row[$i]->Session;
             }

            $data['curr_session'] = $PSess;
            $JudgeName = ($this->session->userdata['logged_in']['JudgeName']);
            $JudgeID = $this->Judge_Model->jid($JudgeName);
            $JudgeID = $JudgeID[0]->JudgeID;
            $data['Posters'] = $this->Judge_Model->viewAllPosters($JudgeID,$PSess); //
            $this->load->view('Templates/judgeHeader',$data);
            $this->load->view('PosterView/posterListJudge', $data);
         }
       }

        public function view($slug = NULL){
            $data['Judge_item'] = $this->news_model->get_news($slug);

         if (empty($data['Judge_item'])){
            show_404();
         }

         $data['logged_in'] = $data['Judge_item']['JudgeName'];

         $this->load->view('PosterView/view', $data);
       }
       public function ScorePoster($PosterID = NULL){
            $data['PosterID']=$PosterID;
            $JudgeName = ($this->session->userdata['logged_in']['JudgeName']);
            //Get JudgeID
            $JudgeID = $this->Judge_Model->jid($JudgeName);
            $data['JudgeID'] = $JudgeID[0]->JudgeID;
            $this->form_validation->set_rules('Criteria1', 'Criteria1 ', 'required');
            $this->form_validation->set_rules('Criteria2', 'Criteria2 ', 'required');
            $this->form_validation->set_rules('Criteria3', 'Criteria3 ', 'required');
            $this->form_validation->set_rules('Criteria4', 'Criteria4 ', 'required');
            $this->form_validation->set_rules('Criteria5', 'Criteria5 ', 'required');
            $this->form_validation->set_rules('Criteria6', 'Criteria6 ', 'required');
            $this->form_validation->set_rules('Criteria7', 'Criteria7 ', 'required');
            $this->form_validation->set_rules('Criteria8', 'Criteria8 ', 'required');
            $this->form_validation->set_rules('Criteria9', 'Criteria9 ', 'required');
            $this->form_validation->set_rules('Criteria10', 'Criteria10 ','required');
            $this->form_validation->set_rules('Criteria11', 'Criteria11 ','required');
            $this->form_validation->set_rules('Criteria12', 'Criteria12 ','required');
            $this->form_validation->set_rules('Criteria13', 'Criteria13 ','required');

            if ($this->form_validation->run() === FALSE && isset($this->session->userdata['logged_in'])){
                $this->load->view('Templates/judgeHeader');
                $this->load->view('PosterView/ScorePoster',$data);
            }
            else{ //Olonce all Criteria has been Filled
              $this->Judge_Model->Post_Score();
              redirect('PosterController/index');
          }
        }
        public function UpdateScorePoster($PosterID = NULL){
             $data['PosterID']=$PosterID;
             $JudgeName = ($this->session->userdata['logged_in']['JudgeName']);
             //Get JudgeID
             $JudgeID = $this->Judge_Model->jid($JudgeName);
             $data['JudgeID'] = $JudgeID[0]->JudgeID;
             //$data['JudgeID'] = $JudgeID;
             $this->form_validation->set_rules('Criteria1', 'Criteria1 ', 'required');
             $this->form_validation->set_rules('Criteria2', 'Criteria2 ', 'required');
             $this->form_validation->set_rules('Criteria3', 'Criteria3 ', 'required');
             $this->form_validation->set_rules('Criteria4', 'Criteria4 ', 'required');
             $this->form_validation->set_rules('Criteria5', 'Criteria5 ', 'required');
             $this->form_validation->set_rules('Criteria6', 'Criteria6 ', 'required');
             $this->form_validation->set_rules('Criteria7', 'Criteria7 ', 'required');
             $this->form_validation->set_rules('Criteria8', 'Criteria8 ', 'required');
             $this->form_validation->set_rules('Criteria9', 'Criteria9 ', 'required');
             $this->form_validation->set_rules('Criteria10', 'Criteria10 ','required');

             if ($this->form_validation->run() === FALSE && isset($this->session->userdata['logged_in'])){
                 $this->load->view('Templates/judgeHeader');
                 $this->load->view('PosterView/UpdateScorePoster',$data);
             }
             else{ //Olonce all Criteria has been Filled
               $this->Judge_Model->Update_Post_Score($data['JudgeID'],$data['PosterID']);
               redirect('PosterController/index');
           }
         }
}
