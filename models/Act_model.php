<?php
/* 
 * File Name: employee_model.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Act_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //get department table to populate the department name dropdown
    function get_actividad()     
    { 
        $this->db->select('nombre');
        $this->db->select('id');
        $this->db->from('actividad');
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $act_id = array('-SELECT-');
        $act_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
           array_push($act_id, $result[$i]->id);
           array_push($act_name, $result[$i]->nombre);
           
        }
       
        return $act_result = array_combine($act_id ,$act_name);
    }

     function get_tipo()     
    { 
        
        $this->db->select('Id');
        $this->db->from('tipo_diente');
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $tipo_id = array('-SELECT-');
        
        for ($i = 0; $i < count($result); $i++)
        {
           array_push($tipo_id, $result[$i]->Id);
           
           
        }
       
        //return $act_result = array_combine($act_id ,$act_name);
        return $tipo_result = $tipo_id;
    }

    function get_zona()     
    { 
        $this->db->select('nombre');
        $this->db->select('id');
        $this->db->from('zona_diente');
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $zona_id = array('-SELECT-');
        $zona_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
           array_push($zona_id, $result[$i]->id);
           array_push($zona_name, $result[$i]->nombre);
           
        }
       
        return $zona_result = array_combine($zona_id ,$zona_name);
    }

    function get_act_trat_tipo()     
    { 
        $this->db->select('Nombre');
        $this->db->select('id');
        $this->db->from('act_trat_tipo');
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $at_id = array('-SELECT-');
        $at_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
           array_push($at_id, $result[$i]->id);
           array_push($at_name, $result[$i]->Nombre);
           
        }
       
        return $at_result = array_combine($at_id ,$at_name);
    }


   
}