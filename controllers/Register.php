<?php
/* 
 * File Name: employee.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
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
        //load the employee model
        $this->load->model('Register_model');
        //+++++++++++ Odonto model +++++++++++++++++++++
        $this->load->model('Odonto_model');
        $this->load->model('login_model');
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

         $this->form_validation->set_rules('tutor', 'Nombre del tutor', 'trim|required');

         $this->form_validation->set_rules('edad', 'Edad', 'trim|required|numeric');

         $this->form_validation->set_rules('bday', 'Fecha de nacimiento', 'trim|required');

         $this->form_validation->set_rules('contacto', 'Contacto', 'trim|required|numeric');


        $this->form_validation->set_rules('direccion', 'Direccion', 'trim|required');


        if ($this->form_validation->run() == FALSE)
        {
            //fail validation
            
            //$this->load->view('Register_view', $data);
            $this->load->view('Register_view');
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
              'tipo_persona' => 'paciente',
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
                    'tipo_paciente' => $this->input->post('procedencia'),
                    'tutor' => $this->input->post('tutor'),
                    'zona' => $this->input->post('zona'),


                    );
                 $this->db->insert('paciente', $data2);



//           $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Registrado!!!</div>');
            if($this->input->post('btn_add') == "Completar")
            {
                redirect('Home');
            }    

            if($this->input->post('btn_addod') == "Realizar Odontodiagrama")
            {
                redirect('Odontodiagrama_C/Odonto_V_Nuevo/'.$this->input->post('zona').'/'.$info.'');
            }      
                
        }

    }

    function CreateUser()
    {
       
            $data['user'] = $this->Odonto_model->get_voluntario();
            $data['userl'] = $this->Odonto_model->get_voluntarios();
              
             
                $this->form_validation->set_rules('persona', 'Ingrese Usuario', 'required');
               $this->form_validation->set_rules('username', 'Username', 'required');
               $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
               $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
       
               if ($this->form_validation->run() == FALSE)
                {
           
                   $this->load->view('register_user_v',$data); 
                }
                $username = $this->input->post("username");
                $password = $this->input->post("password"); 
                $persona = $this->input->post('persona');
                $persona = $this->Odonto_model->get_id_doctor($persona);    
                    if($this->input->post('btn_add') == "Añadir")
                    {
                
                        $password =  $this->encrypt->encode($password);
                        //$password = $this->encryption->encrypt($password);
                        
                    $this->Register_model->set_user($username,$password,$persona);
                     
                    redirect('Register/CreateUser','refresh');
                    
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