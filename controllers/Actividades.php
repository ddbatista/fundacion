<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 include("login.php");
class Actividades extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('Act_model');
     }

     public function index()
     {
        
         
       
          //get the posted values
           //fetch data from actividad, tipo_diente & zona_diente tables
          $data['actividad'] = $this->Act_model->get_actividad();
          $data['tipo_diente'] = $this->Act_model->get_tipo();
          $data['zona_diente'] = $this->Act_model->get_zona();
          $data['act_trat_tipo'] = $this->Act_model->get_act_trat_tipo();

          $this->load->view('actividades_view', $data);

           


      
     }
}