<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class login extends CI_Controller
{
     public $usuario;
     private $ci;
     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          //$this->load->driver('cache');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          $this->load->library('encryption');
          $this->load->library('encrypt');
          //load the login model
          $this->load->model('login_model');
          
     }
    
     public function index()
     {
          //get the posted values
          //$this->load->view('login_funda');
      echo $this->session->userdata('userloggedin');
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

          //set validations
          $this->form_validation->set_rules("txt_username", "Cuenta", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");
          

           if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               
              $this->load->view('login_funda');
               //echo "falidacion Falsa   ";
          }
          else
          {
               //validation succeeds
              // echo "Validacion Realizada   ";
              if ($this->input->post('btn_login') == "Identificarse")
               {
                    //check if username and password is correct

                    //$this->login_model->get_user($username, $password);
                    $usr_result = $this->login_model->get_user($username, $password);
                    //if ($usr_result > 0) //active user record is present
                    if ($usr_result!= FALSE)
                    {
                         //set the session variables
                      //$user=$username."-".$this->encryption->create_key(8);
                         $sessiondata = array(
                              'username' => $username,
                              'loginuser' => $this->encryption->create_key(8)
                              
                         );
                         
                         
                         
                          $usuario=$username;
                          $uniqueId = uniqid($this->input->ip_address(), TRUE);
                          $this->session->set_userdata("userloggedin", md5($uniqueId));
                          //$this->session->set_userdata('userloggedin', TRUE);
                         redirect('Home');
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('login');
                    }
               }
               else
               {
                    redirect('login');
               }
          }
     }

     public function Logout(){
          // destroy sessiondata
         //$this->session->unset_userdata('userloggedin');
           $this->ci =& get_instance();
           $this->ci->session->unset_userdata('userloggedin');
          //$this->session->sess_destroy();
          redirect('login','refresh');
      }

     public function get_user_p()
     {
       
      // return $usuario;
     }
     /*public function is_logged_in(){
        
       $is_logged_in = $this->session->userdata('user_loggedin');

        if(!isset($is_logged_in)||$is_logged_in!= TRUE ){
        redirect('login','refresh');
        }

     }*/
/*
     public function set_user()
     {

       $Users = $this->login_model->get_users_names();
       $size_users = count($USers);
       $data = array(
           'Users' => $Users,
           'size_users' => $size_users,
          );
       $this->load->view('set_user_View',$data);

       
       $user = $this->input->post("txt_user");
       $username = $this->input->post("txt_username");
       $password = $this->input->post("txt_password");
       $this->login_model->set_userdb($user,$username,$password);

   
     }*/
     
     
}