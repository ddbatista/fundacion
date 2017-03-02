<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 include('odontodiagrama_c.php');
class Odonto_V_C extends CI_Controller
{
     private $ci;
     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          $this->load->model('Odonto_V_model');
          $this->load->model('login_model');
           $this->load->library('encryption');
          $this->load->library('encrypt');
          if(!$this->session->userdata('userloggedin'))
          {
            redirect('login','refresh');
          }
          //load the login model
          
     }

     public function index()
     {
          $info;
          $size=0;
          $infoSO;
          $paciente;
          $sizeSO=0;
        
          $ar = $this->Odonto_V_model->DBconsultsessionP();
          $pa = $ar['paciente'];
          $doc = $ar['doctor'];
          $dt = $ar['masterStamp'];
          //echo $ar;
          
         // $pa = $this->session->userdata('paciente');
          //$doc =$this->session->userdata('doctor');
          //$dt = $this->session->userdata('datetime');
          $tipo_entrada_IO = "IO";
          echo "****doctor ".$doc."****paciente ".$pa."****tiempo ".$dt;
          //$pacientesess=$datasess['paciente'];

          //echo "el paciente es el: ".$pa."  el doctor".$doc." y el mastertimes es ".$dt;
          

                /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

                /*
                try {
                  $info = $this->Odonto_V_model->DBMasterConsult($pa);
                  $size=count($info);
                  
                }catch (Exception $e) {
                  echo '- '.$e->getMessage();
                  echo '<br>-- Error en la extrasion de los datos desde la DB.<br><br>';
                  //echo $e->getMessage();
                }

                $data = array(
                    'info' => $info,
                    'size' => $size,


                    );
                
                $this->load->view('odontodiagrama',$data);
                $d =$this->input->get("d");
                if($this->input->post('btn_est') == "Establecer estado")
                {
                    $this->Diente_V($d);
                }
                */
                /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

                try {
                  $info = $this->Odonto_V_model->DBMasterConsult_For_IO($pa);
                  $size=count($info);
                  $infoSO = $this->Odonto_V_model->xDBMasterConsult($pa);
                  $sizeSO=count($infoSO);

                  
                }catch (Exception $e) {
                  echo '- '.$e->getMessage();
                  echo '<br>-- Error en la extrasion de los datos desde la DB.<br><br>';
                  //echo $e->getMessage();
                }

                $data = array(
                    'info' => $info,
                    'size' => $size,
                    'infoSO' => $infoSO,
                    'sizeSO' => $sizeSO,
                  );
                
                
                //$d =$this->input->get("d");
                //$db =$this->input->get("db");


                /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
                /*if($this->input->post('btn_est_IO') == "Establecer estado")
                { 
                  
                    $this->Diente_V_IO($d);
                }*/
                /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/



                /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
                /*if($this->input->post('btn_est_SO') == "Establecer estado")
                {   
                  
                    $this->Diente_V_SO($db);
                }*/
                /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
                $this->load->view('odontodiagrama_m',$data);
    }


    //***************************************************************************** 
    /*
      Funcion para poner los comentarios
      @params $id_paciente
    */
    //*****************************************************************************
    public function Comment($zona,$id_paciente)
    {
        
        $odonto_doctor = $this->Odonto_model->get_medico();
        $odonto_doctores = $this->Odonto_model->get_medicos();
        $count = count($odonto_doctor);
        $info = $this->Comment_model->DBLoadToSystemConsult($id_paciente);
        $infoCount = count($info);
        $infoComment = $this->Comment_model->DBLoadToSystemConsult($id_paciente);
        $infoCommentCount = count($infoComment);
        
        if ($this->input->post('btn_comment_save') == "Guardar")
        {
         $tempDate = $this->input->post("date");
         $tempComment = $this->input->post("outputtext");
         $Doctor = $this->input->post('doctor');
         $tempDoctor =  $this->Odonto_model->get_id_doctor($Doctor);
          if(($tempDate=="")||($tempComment=="")){
               echo 'Advertencia: Todos los campos son obligatorios.';
             }
          else{
           $this->Comment_model->DBCommentInsert($tempDoctor,$id_paciente,$tempComment,$tempDate);
           

          }
        }
        $data = array(
                    'zona' => $zona,
                    'id_paciente' => $id_paciente,
                    'odonto_doctor' => $odonto_doctor,
                    'odonto_doctores' => $odonto_doctores,
                    'count' => $count,
                    'infoCount'=> $infoCount,
                    'info' => $info,
                    'infoComment' => $infoComment,
                    'infoCommentCount' => $infoCommentCount,
                    
                  );
        $this->load->view('comment_view',$data);
        if ($this->input->post('btn_back') == "Odontodiagrama")
        {
          
          redirect('Odontodiagrama_C/Odonto_V_Nuevo/'.$zona.'/'.$id_paciente.'');
        }
      

      
    }



    /*
      Función para odontodiagrama Inicial
     */
    function Diente_V_IO($d)
     {

          $info;
          $size=0;

          $this->load->library('session');/*
          $ar = $this->Odonto_V_model->DBconsultsessionP();
          $pa = $ar['paciente'];
          $doc = $ar['doctor'];
          $dt = $ar['masterStamp'];*/
          
          $pa = $this->session->userdata('paciente');
          $doc =$this->session->userdata('doctor');
          $dt = $this->session->userdata('datetime');
          $tipo_entrada_IO = "IO";

          echo "++++doctor ".$doc."++++paciente ".$pa."++++tiempo ".$dt;

            try {
                    echo "Veremos que es lo que esta haciendo ".$d;
                  try {
                    if(!($this->input->post('a')=="N/A")){
                         echo " a ".$this->input->post('a');
                         $this->Odonto_V_model->DBOndontodiagramaInsert($pa, $doc, $this->input->post('a'), $d, 1, $tipo_entrada_IO,$dt);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('b')=="N/A")){
                     $this->Odonto_V_model->DBOndontodiagramaInsert($pa, $doc, $this->input->post('b'), $d, 4,$tipo_entrada_IO,$dt);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('c')=="N/A")){
                      $this->Odonto_V_model->DBOndontodiagramaInsert($pa, $doc, $this->input->post('c'), $d, 5,$tipo_entrada_IO,$dt);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('d')=="N/A")){
                      $this->Odonto_V_model->DBOndontodiagramaInsert($pa, $doc, $this->input->post('d'), $d, 2,$tipo_entrada_IO,$dt);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('e')=="N/A")){
                      $this->Odonto_V_model->DBOndontodiagramaInsert($pa, $doc, $this->input->post('e'), $d, 3,$tipo_entrada_IO,$dt);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(($this->input->post('a')=="Borrar")||($this->input->post('b')=="Borrar")||($this->input->post('c')=="Borrar")||($this->input->post('d')=="Borrar")||($this->input->post('e')=="Borrar")){
                      $this->Odonto_V_model->DBOndontodiagramaDelete($pa,$doc,$d);
                    }
                  } catch (Exception $e) {
                    $e->getMessage();
                  }


                } catch (Exception $e) {
                  $e->getMessage();

                }

                redirect('Odonto_V_C');
                
                
               

      }


      /*
      Función para odontodiagrama Seguimiento
     */

      function Diente_V_SO($db)
     {

          $info;
          $size=0;

          
          /*$ar = $this->Odonto_V_model->DBconsultsessionP();
          $pa = $ar['paciente'];
          $doc = $ar['doctor'];
          $dt = $ar['masterStamp'];*/
          
          $pa = $this->session->userdata('paciente');
          $doc =$this->session->userdata('doctor');
          $dt = $this->session->userdata('datetime');
          $tipo_entrada_SO = "SO";


            try {
                    echo "Veremos que es lo que esta haciendo ".$db;
                  try {
                    if(!($this->input->post('ab')=="N/A")){
                         echo " a ".$this->input->post('a');
                         $this->Odonto_V_model->xDBOndontodiagramaInsert($pa, $doc, $this->input->post('ab'), $db, 1, $tipo_entrada_SO,$dt);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('bb')=="N/A")){
                     $this->Odonto_V_model->xDBOndontodiagramaInsert($pa, $doc, $this->input->post('bb'), $db, 4,$tipo_entrada_SO,$dt);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('cb')=="N/A")){
                      $this->Odonto_V_model->xDBOndontodiagramaInsert($pa, $doc, $this->input->post('cb'), $db, 5,$tipo_entrada_SO,$dt);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('db')=="N/A")){
                      $this->Odonto_V_model->xDBOndontodiagramaInsert($pa, $doc, $this->input->post('db'), $db, 2,$tipo_entrada_SO,$dt);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('eb')=="N/A")){
                      $this->Odonto_V_model->xDBOndontodiagramaInsert($pa, $doc, $this->input->post('eb'), $db, 3,$tipo_entrada_SO,$dt);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(($this->input->post('ab')=="Borrar")||($this->input->post('bb')=="Borrar")||($this->input->post('cb')=="Borrar")||($this->input->post('db')=="Borrar")||($this->input->post('eb')=="Borrar")){
                      $this->Odonto_V_model->xDBOndontodiagramaDelete($pa,$doc,$db);
                    }
                  } catch (Exception $e) {
                    $e->getMessage();
                  }


                } catch (Exception $e) {
                  $e->getMessage();

                }
                

              
              redirect('Odonto_V_C');  
                
      }

      function RC()
      {
          $this->Odonto_V_model->Update_IOandSO__to_IandS();
          redirect('Home');

      }

      function BT()
      {
          $this->Odonto_V_model->MasterDelete();
          redirect('Odonto_V_C');
        
      }

}            
  