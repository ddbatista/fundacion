<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Odonto_V_model extends CI_Model
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
      /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
    /*
  
      Insertar Sesion 
    */

    function DBsessioninsert($id_paciente, $id_medico, $masterDay)
     {
          $data = array(
                              'paciente' => $id_paciente,
                              'doctor' => $id_medico,
                              'masterStamp' => $masterDay,



                              );
          $this->db->insert('sessions', $data);

     }
     /*
  
      Eliminar Sesion 
    */
      function DBsessionDelete($id_paciente, $id_medico, $masterDay )
     {
          $arr = array('paciente' =>$id_paciente, 'doctor' =>$id_medico, 'masterStamp' =>$masterDay );
          $this->db->delete('sessions');
          $this->db->where ($arr);


     }
     /*
  
      Select Sesion 
    */
      function DBconsultsessionP()
     {
           
          $paciente = $this->session->userdata('paciente');
          $doctor =$this->session->userdata('doctor');
          $masterStamp = $this->session->userdata('datetime');
          //return $info;
          return array(
            'paciente' =>$paciente,
            'doctor' =>$doctor,
            'masterStamp' =>$masterStamp,
            );
     }





    /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

    /*
    function DBOndontodiagramaInsert($id_paciente, $id_medico, $accion, $posicionDiente, $zonaDiente)
     {
          $data = array(
                              'id_paciente' => $id_paciente,
                              'id_medico' => $id_medico,
                              'accion' => $accion,
                              'posicionDiente' => $posicionDiente,
                              'zonaDiente' => $zonaDiente,




                              );
          $this->db->insert('odontodiagrama', $data);

     }
    */
     /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

     /*

      Odontodiagrama Inicial
     */
     function DBOndontodiagramaInsert($id_paciente, $id_medico, $accion, $posicionDiente, $zonaDiente, $tipo, $masterDay,$zona)
     {
          $data = array(
                              'id_paciente' => $id_paciente,
                              'id_medico' => $id_medico,
                              'accion' => $accion,
                              'posicionDiente' => $posicionDiente,
                              'zonaDiente' => $zonaDiente,
                              'tipo' => $tipo,
                              'MasterTimeStamp' => $masterDay,
                              'zonaTrabajo' => $zona,


                              );
     	    $this->db->insert('odontodiagrama', $data);

     }
     /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
     /*

      Odontodiagrama Seguimiento
     */

     function xDBOndontodiagramaInsert($id_paciente, $id_medico, $accion, $posicionDiente, $zonaDiente, $tipo, $masterDay,$zona)
     {
          $data = array(
                              'id_paciente' => $id_paciente,
                              'id_medico' => $id_medico,
                              'accion' => $accion,
                              'posicionDiente' => $posicionDiente,
                              'zonaDiente' => $zonaDiente,
                              'tipo' => $tipo,
                              'MasterTimeStamp' => $masterDay,
                              'zonaTrabajo' => $zona,


                              );
          $this->db->insert('odontodiagrama', $data);

     } 
     /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


     /*
      
     function DBOndontodiagramaDelete($id_paciente, $id_medico, $posicionDiente)
     {
          $arr = array('id_paciente' =>$id_paciente, 'id_medico' =>$id_medico, 'posicionDiente' =>$posicionDiente );
          $this->db->delete('odontodiagrama');
          $this->db->where ($arr);


     }
     */


      /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
      /*

      Odontodiagrama Inicial
     */

     function DBOndontodiagramaDelete_For_IO($id_paciente, $id_medico, $posicionDiente)
     {
          $arr = array('id_paciente' =>$id_paciente, 'id_medico' =>$id_medico, 'posicionDiente' =>$posicionDiente, 'tipo' => 'IO' );
     	    $this->db->delete('odontodiagrama');
     	    $this->db->where ($arr);


     }
     /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
     /*

      Odontodiagrama Seguimiento
     */
     function xDBOndontodiagramaDelete($id_paciente, $id_medico, $posicionDiente)
     {
          $arr = array('id_paciente' =>$id_paciente, 'id_medico' =>$id_medico, 'posicionDiente' =>$posicionDiente, 'tipo' => 'SO' );
          $this->db->delete('odontodiagrama');
          $this->db->where ($arr);


     }

     /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


     function MasterDelete()
     {
         $arr = "tipo = 'SO' OR tipo = 'IO'";
         $this->db->delete('odontodiagrama');
         $this->db->where ($arr);
         

                      
      }
      /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

      function Update_IOandSO__to_IandS()
      {
          $I="I";
          $S="S";/*
          $dataI = array
          (
            'tipo' => $I
          ); 
          $arrI ="tipo = 'IO'"; 
          $this->db->update('odontodiagrama' , $dataI);
          $this->db->where ('tipo','IO');*/
          $sql = "update odontodiagrama SET tipo = 'I' where  tipo = 'IO'";
          $this->db->query($sql);
          /*$dataS = array
          (
            'tipo' => $S
          ); 
          $arrS ="tipo = 'SO'"; 
          $this->db->update('odontodiagrama' , $dataS);
          $this->db->where ('tipo','SO');*/
          $sqlS = "update odontodiagrama SET tipo = 'S' where  tipo = 'SO'";
          $this->db->query($sqlS);

      }
      /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
/*
     function DBMasterConsult($id_paciente)
     {
            $info = array();
            $i = 0;
            echo "PAciente en Model es: ".$id_paciente;
            $this->db->select('id,id_paciente,id_medico,accion,posicionDiente,zonaDiente');
            $this->db->from('odontodiagrama');
            $this->db->where('id_paciente',  $id_paciente) ;
            $this->db->order_by("posicionDiente", "zonaDiente");
            
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
     }*/

/*
     function DBMasterConsult($id_paciente)
     {
            $info = array();
            $i = 0;

            $data = array(

                  'id_paciente' => $id_paciente,
                  'tipo' => 'IO',




              );
            
            $this->db->select('id,id_paciente,id_medico,accion,posicionDiente,zonaDiente');
            $this->db->from('odontodiagrama');
            $this->db->where($data) ;
            $this->db->order_by("posicionDiente", "zonaDiente");
            
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

*/
     /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
     /*
      Odontodiagrama Inicial

     */
     function DBMasterConsult_For_IO($id_paciente)
     {
            $info = array();
            $i = 0;

            $data = array(

                  'id_paciente' => $id_paciente,
                  'tipo' => 'IO',
            );
            
            $this->db->select('id,id_paciente,id_medico,accion,posicionDiente,zonaDiente');
            $this->db->from('odontodiagrama');
            $this->db->order_by("posicionDiente", "asc");
            $this->db->order_by("zonaDiente", "asc");

            $this->db->where($data);
            
            
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

     /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
     /*
      Odontodiagrama Seguimiento

     */

     function xDBMasterConsult($id_paciente)
     {
            $info = array();
            $i = 0;

            $data = array(

                  'id_paciente' => $id_paciente,
                  'tipo' => 'SO',




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

     /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


    /*function DBMasterConsult_V($id_paciente)
     {

          $info;
          $i = 0;

            $this->db->select('id,id_paciente,id_medico,accion,posicionDiente,zonaDiente');
            $this->db->from('odontodiagrama');
            $this->db->where('id_paciente',  $id_paciente) ;
            $this->db->order_by("posicionDiente", "zonaDiente");
            
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
     }*/

     /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

   


   
}