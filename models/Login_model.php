<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
          /*$this->load->library('encryption');
          $this->load->library('encrypt');*/
          //$this->session->set_tempdata('userloggedin',TRUE,86400);
          
     }
     function gen_token()
     {
      $key = $this->encryption->create_key(8);
      echo $key;

      $this->session->set_userdata('userloggedin',$key);
     }
     //get the username & password from tbl_usrs
     function get_user($usr, $pwd)
     {
          

          //$sqle = "select password from usuario where username '".$usr."'";
          //$sql = "select * from usuario where username = '" . $usr . "' and password = '" .$pwd. "'";
          //$query = $this->db->query($sql);
          //return $query->num_rows();

          //$data = "id_persona = ".$id_paciente;
                    
          $this->db->select('password');
          $this->db->from('usuario');
          $this->db->where('username', $usr);
                   
          $result = $this->db->get();
          
          $num_rows = $result->num_rows();
          if ($num_rows > 0) 
          {
          
                    //echo "\n cantidad de lineas ".$num_rows;  
                    foreach ($result->result() as $row) 
                    {
                      
                      $info = $row->password;
                    
                    
                
                    }
            $decrypt_pass =$this->encrypt->decode($info);
            //$this->session->set_userdata('userloggedin',$usr);
            if($pwd == $decrypt_pass )
            {
              
              return TRUE;
            }
            else
            {
              
              return FALSE;
            }
          } 
                   

                 // return $info;

     }

     /*function set_userdb($user, $username,$password)
     {
          

          $sql = "select id_persona from persona where nombres = IF(  LOCATE(' ', '".$user."')> 0, substring('".$user."',1,LOCATE(' ', '".$user."') -1), '".$user."')"
          $result = $this->db->query($sql);
          $num_rows = $result->num_rows();
          $i=0;
          if ($num_rows > 0) 
          {
          // output data of each row
            foreach ($result->result() as $row) 
            {
              $info  =  $row ->id_persona;
              $i++;
                
            }
            
          }

          $data = array
          (
                 'username' => $username,
                 'password' => $password,
                 'id_persona' => $info,
                 'id_rol' => 1,
          );
          $this->db->insert('usuario', $data);
     }
    */
     public function get_users_names()
     {
          $sql = "select nombres, apellidos from persona where tipo_persona != 'paciente'";
          $result = $this->db->query($sql);
          $num_rows = $result->num_rows();
          $i=0;
          if ($num_rows > 0) 
          {
          // output data of each row
            foreach ($result->result() as $row) 
            {
              $info[$i]  = array($row ->nombres, $row->apellidos);
              $i++;
                
            }
            return $info;
            
          }



     }
}