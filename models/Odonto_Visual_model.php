<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Odonto_Visual_model extends CI_Model
{

    function __construct()
    {
        
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
       
        
          
    }

    function DBMasterConsult_For_IO($view)
     {
            $info = array();
            $i = 0;
            //$view = preg_replace('%20', ' ', $viewo);
           
            $data = array(

                  'Date(MasterTimeStamp)' => $view,
                  'tipo' => 'I',
            );
            
            $this->db->select('id,id_paciente,id_medico,accion,posicionDiente,zonaDiente');
            $this->db->from('odontodiagrama');
            $this->db->where($data) ;
            $this->db->order_by("posicionDiente", "asc");
            $this->db->order_by("zonaDiente", "asc");
            
          $result = $this->db->get();
          $num_rows = $result->num_rows();
          
          if ($num_rows > 0) 
          {
          // output data of each row
            
              foreach ($result->result() as $row) {
              # code...
              $info [$i] = array( $row ->accion, $row ->posicionDiente, $row ->zonaDiente);
              
              $i++;
            }
           
          }
          
          return $info;
     }


     function xDBMasterConsult($viewo)
     {
            $info = array();
            $i = 0;

            $data = array(

                  'Date(MasterTimeStamp)' => $viewo,
                  'tipo' => 'S',
            );
            
            $this->db->select('id,id_paciente,id_medico,accion,posicionDiente,zonaDiente');
            $this->db->from('odontodiagrama');
            $this->db->where($data) ;
            $this->db->order_by("posicionDiente", "asc");
            $this->db->order_by("zonaDiente", "asc");
            
          $result = $this->db->get();
          $num_rows = $result->num_rows();
          if ($num_rows > 0) 
          {
          // output data of each row
              foreach ($result->result() as $row) {
              # code...
              $info [$i] = array( $row ->accion, $row ->posicionDiente, $row ->zonaDiente);

              $i++;
            }
           
          }
          
          return $info;
     }
    
   
}