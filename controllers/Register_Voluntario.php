<?php
/* 
 * File Name: employee.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_Voluntario extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
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

        $this->form_validation->set_rules('firstname', 'Nombres',
         'trim|required');

         $this->form_validation->set_rules('lastname', 'Apellidos', 'trim|required');


         $this->form_validation->set_rules('edad', 'Edad', 'trim|required|numeric');

         $this->form_validation->set_rules('bday', 'Fecha de nacimiento', 'trim|required');

         $this->form_validation->set_rules('contacto', 'Contacto', 'trim|required|numeric');


        $this->form_validation->set_rules('direccion', 'Direccion', 'trim|required');


        if ($this->form_validation->run() == FALSE)
        {
            //fail validation
            
            //$this->load->view('Register_view', $data);
            $this->load->view('Register_voluntario_view');
        }
        else
        {    
            echo "pass validation";

            $data = array(
              'nombres' => $this->input->post('firstname'),
              'apellidos' => $this->input->post('lastname'),
              'sexo' => $this->input->post('gender'),
              'edad' => $this->input->post('edad'),
              'fecha_nacimiento' => $this->input->post('bday'),
              'contacto' => $this->input->post('contacto'),
              'tipo_persona' => $this->input->post('Voluntariado'),
              'direccion' => $this->input->post('direccion'),


                );

            

            

            //insert the form data into database
            $this->db->insert('persona', $data);
            //display success message
            
            $this->db->select('id_persona');
            $this->db->from('persona');
            $this->db->where('nombres',  $this->input->post('firstname')) ;
             //$sql = "select id_persona from persona where nombres = '" .$data["nombres"] . "'";
            $query = $this->db->get();
            
            //$info = $query->result();
            foreach ($query->result() as $row) {
              # code...
              $info = $row->id_persona;
            }

            //$arrlength = count($info);
            echo $info;

                 $data2 = array(

                    'id_persona' => $info,
                    'tipo_voluntario' => $this->input->post('Voluntariado'),
                    


                    );
                 $this->db->insert('voluntario', $data2);



           $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Registrado!!!</div>');
            
            redirect('Home');
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