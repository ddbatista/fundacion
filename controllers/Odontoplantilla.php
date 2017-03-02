<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Odontoplantilla extends CI_Controller
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
          $this->load->model('Odonto_model');
          $this->load->model('login_model');
          if(!$this->session->userdata('userloggedin'))
          {
            redirect('login','refresh');
          }
          
     }

     public function index()
     {
        $data['odonto_medico'] = $this->Odonto_model->get_medico();
        $data['odonto_paciente'] = $this->Odonto_model->get_paciente();

         $this->load->view('Odontodiagrama', $data);
     }

     
}