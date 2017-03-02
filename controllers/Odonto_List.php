<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
class Odonto_list extends CI_Controller
{
     public $diente;
     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          $this->load->model('Odonto_list_model');
          $this->load->model('login_model');
           $this->load->library('encryption');
          $this->load->library('encrypt');
          //$this->login_model->gen_token();
          if(!$this->session->userdata('userloggedin'))
          {
            redirect('login','refresh');
          }
          
          //load the login model
          
     }

     public function index()
     {
        $info;
        $size=0;
        echo "El paciente es el: ".$this->session->userdata('paciente');
        //$ar = $this->Odonto_list_model->DBconsultsessionP();
        //$pa = $ar['paciente'];
        $pa = $this->session->userdata('paciente');
        $info = $this->Odonto_list_model->getDBOdontodiagramaList($pa);
        $size=count($info);
        $tipo_entrada_IO = "IO";


         $data = array(
                    'info' => $info,
                    'size' => $size,
                    
                  );
                
                $this->load->view('odonto_l_view',$data);

     }


     



}            
  