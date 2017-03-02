<?php
/* 
 * File Name: employee_model.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
/*
    //get department table to populate the department name dropdown
    function get_department()     
    { 
        $this->db->select('Nombre');
        $this->db->select('Id_inst');
        $this->db->from('institucion');
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $dept_id = array('-SELECT-');
        $dept_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
           array_push($dept_id, $result[$i]->Id_inst);
           array_push($dept_name, $result[$i]->Nombre);
           
        }
       
        return $department_result = array_combine($dept_id ,$dept_name);
    }
*/
    function set_user( $username,$password,$id_persona)
    {
       $data = array(
            'username' => $username,
            'password' => $password,
            'id_rol' => '1',
            'id_persona' => $id_persona,
        );
        $this->db->insert('usuario', $data);
    }
   
}