<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
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

     /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
     Función para obtener la cantidad de caries por mes
     @params $mes -> indica el mes
     @params $id_paciente -> Indica el paciente
     ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
     function GetCountCariesMonth($mes,$id_paciente)
     {
          $info = array();
          $i = 0;
          $query = "select count(month(MasterTimeStamp)) as Mes from odontodiagrama where id_paciente='".$id_paciente."' and accion = 'Cariada' and Month(MasterTimeStamp)='".$mes."'";
          $result = $this->db->query($query);

          $num_rows = $result->num_rows();
          if ($num_rows > 0) 
          {

          // output data of each row
              foreach ($result->result() as $row) {
              # code...
              $info = $row ->Mes;

            }
           
          }
          return $info;
     }
     function GetCountSanosMonth($mes,$id_paciente)
     {
          $info = array();
          $i = 0;
          $query = "select count(month(MasterTimeStamp)) as Mes from odontodiagrama where id_paciente='".$id_paciente."' and accion = 'Sanos' and Month(MasterTimeStamp)='".$mes."'";
          $result = $this->db->query($query);

          $num_rows = $result->num_rows();
          if ($num_rows > 0) 
          {

          // output data of each row
              foreach ($result->result() as $row) {
              # code...
              $info = $row ->Mes;

            }
           
          }
          return $info;
     }
     function GetCountOcturadosMonth($mes,$id_paciente)
     {
          $info = array();
          $i = 0;
          $query = "select count(month(MasterTimeStamp)) as Mes from odontodiagrama where id_paciente='".$id_paciente."' and accion = 'Octurados' and Month(MasterTimeStamp)='".$mes."'";
          $result = $this->db->query($query);

          $num_rows = $result->num_rows();
          if ($num_rows > 0) 
          {

          // output data of each row
              foreach ($result->result() as $row) {
              # code...
              $info = $row ->Mes;

            }
           
          }
          return $info;
     }
     function GetCountRestauradosMonth($mes,$id_paciente)
     {
          $info = array();
          $i = 0;
          $query = "select count(month(MasterTimeStamp)) as Mes from odontodiagrama where id_paciente='".$id_paciente."' and accion = 'Restaurada' and Month(MasterTimeStamp)='".$mes."'";
          $result = $this->db->query($query);

          $num_rows = $result->num_rows();
          if ($num_rows > 0) 
          {

          // output data of each row
              foreach ($result->result() as $row) {
              # code...
              $info = $row ->Mes;

            }
           
          }
          return $info;
     }

     function GetDoctorTopTen()
     {
       //$query= "select  persona.nombres as Nombre, persona.apellidos as Apellido, count(odontodiagrama.id_medico) AS Total  from odontodiagrama, persona where id_persona IN (select id_medico from odontodiagrama) Group BY id_medico  DESC having Count(*) >1 order by Total DESC";
      $query = "select distinct  persona.nombres as Nombre, persona.apellidos as Apellido, count(odontodiagrama.id_medico)  as Total from odontodiagrama, persona  where odontodiagrama.id_medico IN (select id_persona from persona where tipo_persona = 'medico') and odontodiagrama.id_medico = persona.id_persona Group BY id_medico having Count(*) >0 order by Count(*) DESC";
       $result = $this->db->query($query);
       $num_rows = $result->num_rows();
       $i=0;
          if ($num_rows > 0) 
          {
            
          // output data of each row
              
              foreach ($result->result() as $row) {
              # code...
             // $info[$i] = array($row ->Nombre, $row ->Apellido,  $row ->Total);
              $info[$i] = array($row ->Nombre, $row ->Apellido, $row ->Total);

              $i++;

            }
           return $info;
          }
          
     }

}