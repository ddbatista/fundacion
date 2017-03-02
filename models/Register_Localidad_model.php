<?php
/* 
 * File Name: employee_model.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_Localidad_model extends CI_Model
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
        
    }

    function set_localidad($nombre, $ubicacion, $nombre_contacto,$numero_contacto)
    {
        $data = array
          (
                 'nombre' => $nombre,
                 'ubicacion' => $ubicacion,
                 'nombre_contacto' => $nombre_contacto,
                 'numero_contacto' => $numero_contacto,
          );
          
          $this->db->insert('localidades', $data);
    }

    function get_localidad()
    {
          $this->db->select('nombre');
          $this->db->from('localidades');
          $result = $this->db->get();
          $num_rows = $result->num_rows();
          $i=0;
          if ($num_rows > 0) 
          {
          // output data of each row
            foreach ($result->result() as $row) 
            {
              $info [$i] =  $row ->nombre;
              $i++;
                
            }
            return $info;
          }

          
    }

   
}