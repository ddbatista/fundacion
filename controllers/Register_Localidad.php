<?php
/* 
 * File Name: employee.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_Localidad extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        //load the employee model
         $this->load->library('encryption');
          $this->load->library('encrypt');
        if(!$this->session->userdata('userloggedin'))
          {
            redirect('login','refresh');
          }
        
    }

    //index function
    function index()
    {

        $this->form_validation->set_rules('name', 'Nombres','trim|required');
        $this->form_validation->set_rules('location', 'Ubicacion', 'trim|required');
        $this->form_validation->set_rules('n_contacto', 'Contacto', 'trim|required');
        $this->form_validation->set_rules('tel_contacto', 'Telefono', 'trim|required|numeric');
        


        if ($this->form_validation->run() == FALSE)
        {
          $this->load->view('Register_localidad_view');
        }
        else
        {    
            echo "pass validation";

          
            $nombre = $this->input->post('name');
            $ubicacion = $this->input->post('location');
            $nombre_contacto = $this->input->post('n_contacto');
            $numero_contacto = $this->input->post('tel_contacto');
            

            if($this->input->post('btn_add') == "Añadir")
            {
                $this->Register_Localidad_model->set_localidad($nombre, $ubicacion, $nombre_contacto,$numero_contacto);
                redirect('Register_Localidad');
            } 
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Registrado!!!</div>');
            
            //redirect('Home');
        }

    }
    
    //custom validation function for dropdown input
    function combo_check($str)
    {
        if ($str == '-SELECT-')
        {
            $this->form_validation->set_message('combo_check', 'Valid %s Name is required');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    //custom validation function to accept only alpha and space input
    function alpha_only_space($str)
    {
        if (!preg_match("/^([-a-z ])+$/i", $str))
        {
            $this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}