<?php
/* 
 * File Name: employee_model.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Odonto_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
    }

    //get department table to populate the department name dropdown
    function get_medico()     
    { 
        $tipo_persona = array('tipo_persona !=' => 'Padre Eduardo' , 'tipo_persona !=' => 'Voluntario', 'tipo_persona !=' => 'Otro', 'tipo_persona !=' => 'paciente');
        //$tipo_persona = "tipo_persona != 'Padre Eduardo' and tipo_persona= 'Voluntario' and tipo_persona!= 'Otro' and tipo_persona!= 'paciente'";
        $this->db->select('nombres');
        $this->db->select('apellidos');
        $this->db->from('persona');
        //$this->db->where('tipo_persona', 'medico') ;
        $this->db->where($tipo_persona) ;
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $medico_name = array();
        $medico_lastname = array();
       

        for ($i = 0; $i < count($result); $i++)
        {
           array_push($medico_name, $result[$i]->nombres);
           //array_push($medico_lastname, $result[$i]->apellidos);
           
        }
       
        //return $medico_result = array_combine($medico_name,$medico_lastname);

        return $medico_result = $medico_name;
    }

    function get_voluntario()     
    { 
        
        $this->db->select('nombres');
        $this->db->select('apellidos');
        $this->db->from('persona');
        $this->db->where('tipo_persona !=', 'paciente') ;
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $medico_name = array();
        $medico_lastname = array();
       

        for ($i = 0; $i < count($result); $i++)
        {
           array_push($medico_name, $result[$i]->nombres);
           //array_push($medico_lastname, $result[$i]->apellidos);
           
        }
       
        //return $medico_result = array_combine($medico_name,$medico_lastname);

        return $medico_result = $medico_name;
    }

    function get_medico_n($id_medico)     
    { 
         $tipo_persona = array('tipo_persona !=' => 'Padre Eduardo' , 'tipo_persona !=' => 'Voluntario', 'tipo_persona !=' => 'Otro', 'tipo_persona !=' => 'paciente');
         //$tipo_persona = "tipo_persona != 'Padre Eduardo' and tipo_persona= 'Voluntario' and tipo_persona!= 'Otro' and tipo_persona!= 'paciente'";
        $this->db->select('nombres');
        
        $this->db->from('persona');
        //$this->db->where('tipo_persona', 'medico') ;
        $this->db->where($tipo_persona) ;
        $this->db->where('id_persona', $id_medico) ;
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $medico_name = array();
        $medico_lastname = array();
       

        for ($i = 0; $i < count($result); $i++)
        {
           array_push($medico_name, $result[$i]->nombres);
           //array_push($medico_lastname, $result[$i]->apellidos);
           
        }
       
        //return $medico_result = array_combine($medico_name,$medico_lastname);

        return $medico_result = $medico_name;
    }

    function get_medicos()     
    { 
        $tipo_persona = array('tipo_persona !=' => 'Padre Eduardo' , 'tipo_persona !=' => 'Voluntario', 'tipo_persona !=' => 'Otro', 'tipo_persona !=' => 'paciente');
        //$tipo_persona = "tipo_persona != 'Padre Eduardo' and tipo_persona= 'Voluntario' and tipo_persona!= 'Otro' and tipo_persona!= 'paciente'";
        $this->db->select('nombres');
        $this->db->select('apellidos');
        $this->db->from('persona');
        $this->db->where($tipo_persona) ;
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $medico_name = array();
        $medico_lastname = array();
       

        for ($i = 0; $i < count($result); $i++)
        {
           //array_push($medico_name, $result[$i]->nombres);
           array_push($medico_lastname, $result[$i]->apellidos);
           
        }
       
        //return $medico_result = array_combine($medico_name,$medico_lastname);

        return $medico_result =  $medico_lastname;
    }

    function get_voluntarios()     
    { 
        $sql ="tipo_persona != 'medico'";
        $this->db->select('nombres');
        $this->db->select('apellidos');
        $this->db->from('persona');
        $this->db->where('tipo_persona !=', 'paciente') ;
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $medico_name = array();
        $medico_lastname = array();
       

        for ($i = 0; $i < count($result); $i++)
        {
           //array_push($medico_name, $result[$i]->nombres);
           array_push($medico_lastname, $result[$i]->apellidos);
           
        }
       
        //return $medico_result = array_combine($medico_name,$medico_lastname);

        return $medico_result =  $medico_lastname;
    }

    function get_medico_ln($id_medico)     
    { 
        $tipo_persona = array('tipo_persona !=' => 'Padre Eduardo' , 'tipo_persona !=' => 'Voluntario', 'tipo_persona !=' => 'Otro', 'tipo_persona !=' => 'paciente');
        //$tipo_persona = "tipo_persona != 'Padre Eduardo' and tipo_persona= 'Voluntario' and tipo_persona!= 'Otro' and tipo_persona!= 'paciente'";
        
        $this->db->select('apellidos');
        $this->db->from('persona');
        //$this->db->where('tipo_persona', 'medico') ;
        $this->db->where($tipo_persona) ;
        $this->db->where('id_persona', $id_medico) ;
        $query = $this->db->get();
        $result = $query->result();


        //array to store department id & department name
        $medico_name = array();
        $medico_lastname = array();
       

        for ($i = 0; $i < count($result); $i++)
        {
           //array_push($medico_name, $result[$i]->nombres);
           array_push($medico_lastname, $result[$i]->apellidos);
           
        }
       
        //return $medico_result = array_combine($medico_name,$medico_lastname);

        return $medico_result =  $medico_lastname;
    }


    function get_paciente()     
    { 
        $this->db->select('nombres');
        $this->db->select('apellidos');
        $this->db->from('persona');
        $this->db->where('tipo_persona', 'paciente') ;
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $paciente_name = array();
        $paciente_lastname = array();
        

        for ($i = 0; $i < count($result); $i++)
        {
           array_push($paciente_name, $result[$i]->nombres);
           //array_push($paciente_lastname, $result[$i]->apellidos);
           
        }
       
        //return $paciente_result = array_combine($paciente_name,$paciente_lastname);
        //return $paciente_result = array_merge($paciente_name, $paciente_lastname); 
        return $paciente_result = $paciente_name; 
               
    }

    function get_pacientes()     
    { 
        $this->db->select('nombres');
        $this->db->select('apellidos');
        $this->db->from('persona');
        $this->db->where('tipo_persona', 'paciente') ;
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $paciente_name = array();
        $paciente_lastname = array();
        

        for ($i = 0; $i < count($result); $i++)
        {
           
           array_push($paciente_lastname, $result[$i]->apellidos);
           
        }
       
        //return $paciente_result = array_combine($paciente_name,$paciente_lastname);
        //return $paciente_result = array_merge($paciente_name, $paciente_lastname); 
        return $paciente_result = $paciente_lastname; 
               
    }


    function get_id_doctor($doctor)
    {
         $info= array();
         $this->db->select('id_persona');
         $this->db->from('persona');
         $this->db->where('nombres', $doctor);
         $query = $this->db->get();
         foreach ($query->result() as $row)
         {
              # code...
              $info = $row->id_persona;
              
         }

         return $info;



    }


    function get_id_paciente($paciente)
    {
         $info;
         $this->db->select('id_persona');
         $this->db->from('persona');
         $this->db->where('nombres', $paciente);
         $query = $this->db->get();
          foreach ($query->result() as $row)
           {
              # code...
              $info = $row->id_persona;
            }

         return $info;



    }

     function DBsessioninsert($id_paciente, $id_medico, $masterDay)
     {
          $data = array
          (
                 'paciente' => $id_paciente,
                 'doctor' => $id_medico,
                 'masterStamp' => $masterDay,
          );
          $this->db->insert('sessions', $data);

     }
     function DBsessioninsertL($id_paciente)
     {
          $data = array
          (
                 'paciente' => $id_paciente,
                 
          );
          $this->db->insert('sessions', $data);

     }
   
}