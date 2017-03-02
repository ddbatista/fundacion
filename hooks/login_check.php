<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_check extends CI_Controller
{
    private $ci;
    private $i;
     public function __construct()
     {
          
          $this->ci =& get_instance();
          $this->ci->load->library('session');
          $this->ci->load->helper('url');
          /*if (!isset($this->ci->session))
          {
            $this->ci->load->library('session');
          }*/
          //$this->i = 0;
          //load the login model
          
     }

     public function is_logged_in(){
       
      if(get_class($this->ci) != 'login')
      {
        $is_logged_in=$this->ci->session->userdata('userloggedin');
        
        
       if(!isset($is_logged_in)||$is_logged_in!= TRUE ){
      
            //redirect('login','refresh');
          
        }
      
        
          
        
       /* if(get_class($this->ci) == 'Odonto_list'){
        if(!isset($is_logged_inOdontolist)||$is_logged_inOdontolist!= TRUE ){
      
            redirect('login','refresh');
          }
          
        }
        if(get_class($this->ci) == 'Odonto_V_C'){
        if(!isset($is_logged_inOdontoVC)||$is_logged_inOdontoVC!= TRUE ){
      
            redirect('login','refresh');}
          
        }
        if(get_class($this->ci) == 'Odontodiagrama_C'){
        if(!isset($is_logged_inOdontoC)||$is_logged_inOdontoC!= TRUE ){
      
            redirect('login','refresh');}
          
        }
        if(get_class($this->ci) == 'Odontoplantilla'){
        if(!isset($is_logged_inOdontoP)||$is_logged_inOdontoP!= TRUE ){
      
            redirect('login','refresh');}
          
        }
        if(get_class($this->ci) == 'Register'){
        if(!isset($is_logged_inRegister)||$is_logged_inRegister!= TRUE ){
      
            redirect('login','refresh');}
          
        }
        if(get_class($this->ci) == 'Register_Localidad'){
        if(!isset($is_logged_inRegisterL)||$is_logged_inRegisterL!= TRUE ){
      
            redirect('login','refresh');}
          
        }
        if(get_class($this->ci) == 'Register_Voluntario'){
        if(!isset($is_logged_inRegisterV)||$is_logged_inRegisterV!= TRUE ){
      
            redirect('login','refresh');}
          
        }*/
      }
      
    }
       
}
/*
/end hooks/Login_check.php
*/