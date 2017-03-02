<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Odonto_list_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        //load the employee model
        
          
    }


    function getpaciente($id_paciente)
    {
          $i=0;
          $info;      
          $data = "id_persona = ".$id_paciente;
                    
          $this->db->select('nombres, apellidos');
          $this->db->from('persona');
          $this->db->where($data);
                   
          $result = $this->db->get();
          
          $num_rows = $result->num_rows();
          if ($num_rows > 0) 
          {
          
                    //echo "\n cantidad de lineas ".$num_rows;  
                    foreach ($result->result() as $row) 
                    {
                      
                      $info = $row->nombres." ".$row->apellidos;
                    
                    $i++;
                
                    }
            
                   }

                   

                  return $info;

          }

    function getDBOdontodiagramaList($id_paciente)
    {

                  
                  $info [0] = array(" ", 0, 0);
                  $i=0;
                  $data = "id_paciente= '".$id_paciente."' and (tipo LIKE 'I' or tipo LIKE 'S') ";
                  
                    $this->db->distinct();
                    $this->db->select('id_paciente,tipo, Date(MasterTimeStamp) as MasterTimeStamp');
                    $this->db->from('odontodiagrama');
                    $this->db->where($data);
                   
                    $result = $this->db->get();

                    $num_rows = $result->num_rows();
                  if ($num_rows > 0) 
                  {
          // output data of each row
                      
                    foreach ($result->result() as $row) 
                    {
              # code...
                    $info [$i] = array( $row ->tipo,  $row ->MasterTimeStamp);
                    $i++;
                
            }
            
                   }

                   

                  return $info;

                  
    }

    function getDBOdontodiagramaListzona($zona)
    {

                  
                  $info [0] = array(" ", 0, 0);
                  $i=0;

                  $data = "zonaTrabajo= '".$zona."' and (tipo LIKE 'I' or tipo LIKE 'S') ";
                  
                  $this->db->distinct();
                  $this->db->select('id_paciente,tipo, Date(MasterTimeStamp) as MasterTimeStamp');
                  $this->db->from('odontodiagrama');
                  $this->db->where($data);
                   
                    $result = $this->db->get();

                    $num_rows = $result->num_rows();
                    
                  if ($num_rows > 0) 
                  {
          // output data of each row
                      
                    foreach ($result->result() as $row) 
                    {
              # code...
                    $info [$i] = array($row ->id_paciente, $row ->tipo,  $row ->MasterTimeStamp);
                    $i++;
                
                    }
                    return $info;
            
                   }

                   

                  

                  
    }

    function getDBOdontodiagramaListszona($zona)
    {

                  
                  $info [0] = array(" ", 0);
                  $i=0;
                  $data = "zonaTrabajo= '".$zona."' and (tipo LIKE 'I' or tipo LIKE 'S') ";
                  
                    
                    $this->db->select('zonaTrabajo');
                    $this->db->from('odontodiagrama');
                    $this->db->where($data);
                   
                    $result = $this->db->get();

                    $num_rows = $result->num_rows();
                  if ($num_rows > 0) 
                  {
          // output data of each row
                    
                    foreach ($result->result() as $row) 
                    {
              # code...
                      $info [$i] = array( $row ->zonaTrabajo);
                      $i++;
                
                    }
            
                   }

                   

                  return $info;

                  
    }

    function getDBOdontodiagramaLists($id_paciente)
    {

                  
                  $info [0] = array(" ", 0);
                  $i=0;
                  $data = "id_paciente= '".$id_paciente."' and (tipo LIKE 'I' or tipo LIKE 'S') ";
                  
                    
                    $this->db->select('zonaTrabajo');
                    $this->db->from('odontodiagrama');
                    $this->db->where($data);
                   
                    $result = $this->db->get();

                    $num_rows = $result->num_rows();
                  if ($num_rows > 0) 
                  {
          // output data of each row
                      
                    foreach ($result->result() as $row) 
                    {
              # code...
                      $info [$i] = array( $row ->zonaTrabajo);
                      $i++;
                
                    }
            
                   }

                   

                  return $info;

                  
    }

    function getDBOdontodiagramaListdoc($id_paciente)
    {

                  
                  $info [0] = array(" ", 0);
                  $i=0;
                  $data = "id_paciente= '".$id_paciente."' and (tipo LIKE 'I' or tipo LIKE 'S') ";
                  
                    
                    $this->db->select('doctor');
                    $this->db->from('odontodiagrama');
                    $this->db->where($data);
                   
                    $result = $this->db->get();

                    $num_rows = $result->num_rows();
                  if ($num_rows > 0) 
                  {
          // output data of each row
                    
                    foreach ($result->result() as $row) 
                    {
              # code...
                      $info [$i] = array( $row ->zonaTrabajo);
                      $i++;
                
                    }
            
                   }

                   

                  return $info;

                  
    }


    function DBconsultsessionP()
     {
           //$info = array();
            $i = 0;

           
            
            $this->db->select('*');
            $this->db->from('sessions');
            $result = $this->db->get();
            $num_rows = $result->num_rows();
            if ($num_rows > 0) 
            {
          // output data of each row
              foreach ($result->result() as $row) {
              # code...
              //$info [$i] = array( $row ->paciente, $row ->doctor, $row ->masterStamp);
                $paciente = $row->paciente;
                $doctor = $row->doctor;
                $masterStamp = $row->masterStamp;
                
            }
            
          }
          
          //return $info;
          return array(
            'paciente' =>$paciente,
            'doctor' =>$doctor,
            'masterStamp' =>$masterStamp,
            );
     }




    
}