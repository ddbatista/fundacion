<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  
class Home extends CI_Controller
{
  public  $usuario;
     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
          $this->load->library('form_validation');
          //+++++++++++ Home model +++++++++++++++++++++
          $this->load->model('Home_model');
          $this->load->model('login_model');

          if(!$this->session->userdata('userloggedin'))
          {
            redirect('login','refresh');
          }
          
         /* $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
          $this->output->set_header("Pragma: no-cache"); */


           
                   
     }

     public function index()
     {
        //$this->session->set_userdata('userloggedin',TRUE);  
      
        
        
        for ($i=1; $i <= 12 ; $i++) { 
          $arrCaries[$i] = $this->Home_model->GetCountCariesMonth($i,45);
          $arrSanos[$i] = $this->Home_model->GetCountSanosMonth($i,45);
          $arrOcturados[$i] = $this->Home_model->GetCountOcturadosMonth($i,45);
          $arrRestaurados[$i] = $this->Home_model->GetCountRestauradosMonth($i,45);
          //echo "Cantidad Cariada por Mes ".$i." cantidad es".$arr[$i]." ";
          
        }
        $arrTopDoc = $this->Home_model->GetDoctorTopTen();
        $arrTopDocCount = count($arrTopDoc);
        
        $data = array(
                    'Caries_Mes' => $arrCaries,
                    'Sanos_Mes' => $arrSanos,
                    'Octurados_Mes' => $arrOcturados,
                    'Restaurados_Mes' => $arrRestaurados,
                    'Doctores_Top' => $arrTopDoc,
                    'Doctores_Top_Count' => $arrTopDocCount,
                    
                  );
        //$this->session->set_userdata('userloggedin',TRUE);
        
        $this->load->view('home_page',$data);

      
     }
}