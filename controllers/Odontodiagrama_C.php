<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
  
class Odontodiagrama_C extends CI_Controller
{
    private $doctor;
    private $paciente;
    private $Date_time;
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
           $this->load->library('encryption');
          $this->load->library('encrypt');
          //+++++++++++ Odonto model +++++++++++++++++++++
          $this->load->Model('Odonto_model');
          //+++++++++++ Modelo Odonto_V ++++++++++++++++++
          $this->load->model('Odonto_V_model');
          //+++++++++++ Odonto list Model ++++++++++++++++
          $this->load->model('Odonto_list_model'); 
          //+++++++++++ Odonto Visualizacion Model +++++++
          $this->load->model('Odonto_Visual_model');
          //+++++++++++ Odonto Model +++++++++++++++++++++
          $this->load->model('Odonto_model');
          //+++++++++++ Comment Model +++++++++++++++++++++
          $this->load->model('Comment_model'); 
          //+++++++++++ Localidad Model +++++++++++++++++++++
          $this->load->model('Register_Localidad_model'); 
          //+++++++++++ Zona Horaria +++++++++++++++++++++
          if(!$this->session->userdata('userloggedin'))
          {
            //echo "no hay session";
              redirect('login','refresh');
          }
          //$this->load->model('login_model');
          //$this->login_model->gen_token();
          date_default_timezone_set('America/Manaus');
          
          /*$this->session->unset_userdata('userloggedin');
         $this->session->set_userdata('userloggedinOdontodiagramaC',$this->encryption->create_key(8));
          **/

          

          
     }

     public function index()
     {
        // $this->session->set_userdata('userloggedinOdontodiagramaC',$this->encryption->create_key(8));
        $localidad = $this->Register_Localidad_model->get_localidad();
        $size_localidad = count($localidad);
        $data['odonto_medico'] = $this->Odonto_model->get_medico();
        $data['odonto_paciente'] = $this->Odonto_model->get_paciente();
        $data['odonto_pacientes'] = $this->Odonto_model->get_pacientes();
        $data['size_localidad'] = $size_localidad;
        $data['localidades'] = $localidad;
        $this->load->view('Odonto_view', $data);
        
        if ($this->input->post('btn_next') == "Siguiente")
        {
            
            $paciente = $this->input->post('Paciente');
            
            $paciente = $this->Odonto_model->get_id_paciente($paciente);
             
            redirect('Odontodiagrama_C/Odonto_V/'.$paciente.'');
        }

        /*if ($this->input->post('btn_zona_next') == "Historial Zona")
        {
            
            $z = $this->input->post('Zona');
            //$zona = str_replace('%20',' ',$z);
            
            //redirect('Odontodiagrama_C/Odonto_V_zona/'.$zona.'');
            
            
        }*/


        if ($this->input->post('btn_crear') == "Crear Nuevo")
        {
            
            $Zona = $this->input->post('Zona');
            $Zona = str_replace(' ','-',$Zona);
            $paciente = $this->input->post('Paciente');
            
            $paciente = $this->Odonto_model->get_id_paciente($paciente);
            
            redirect('Odontodiagrama_C/Odonto_V_Nuevo/'.$Zona.'/'.$paciente.'');

            
            
        }
     }

      //***************************************************************************** 
    /*
      Funcion para ver historial por zona
     
    */
    //*****************************************************************************
    public function Historial_zona()
    {
        $localidad = $this->Register_Localidad_model->get_localidad();
        $size_localidad = count($localidad);
        $data['size_localidad'] = $size_localidad;
        $data['localidades'] = $localidad;
        $this->load->view('historial_zona_v', $data);

        if ($this->input->post('btn_zona') == "Próximo")
        {
            
            $z = $this->input->post('Zona');
            $zona = str_replace(' ','-',$z);
            echo $zona;
            redirect('Odontodiagrama_C/Odonto_V_zona/'.$zona.'');
            
            
        }

    }
    //***************************************************************************** 
    /*
      Funcion para ver historial por paciente
    */
    //*****************************************************************************
    public function Historial_paciente()
    {
        $data['odonto_paciente'] = $this->Odonto_model->get_paciente();
        $data['odonto_pacientes'] = $this->Odonto_model->get_pacientes();
        $this->load->view('historial_paciente_v', $data);

        if ($this->input->post('btn_paciente') == "Próximo")
        {
            
            $paciente = $this->input->post('Paciente');
            
            $paciente = $this->Odonto_model->get_id_paciente($paciente);
             
            redirect('Odontodiagrama_C/Odonto_V/'.$paciente.'');
        }

    }

     //***************************************************************************** 
    /*
      Funcion para poner los comentarios
      @params $id_paciente
    */
    //*****************************************************************************

    public function Comment($identity,$view_zona,$id_paciente)
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
            

           $this->Comment_model->DBCommentInsert($tempDoctor,$id_paciente,$tempComment,$tempDate,$view_zona);
           redirect('Odontodiagrama_C/Comment/'.$identity.'/'.$view_zona.'/'.$id_paciente.'');
           }
        }
        $data = array(
                    'zona' => $view_zona,
                    'id_paciente' => $id_paciente,
                    'odonto_doctor' => $odonto_doctor,
                    'odonto_doctores' => $odonto_doctores,
                    'count' => $count,
                    'infoCount'=> $infoCount,
                    'info' => $info,
                    'infoComment' => $infoComment,
                    'infoCommentCount' => $infoCommentCount,
                    'identity' => $identity,
                  );
        $this->load->view('comment_view',$data);
        if ($this->input->post('btn_back') == "Odontodiagrama")
        {
          
          redirect('Odontodiagrama_C/Odonto_V_Nuevo/'.$view_zona.'/'.$id_paciente.'');
        }
        if ($this->input->post('btn_back_view') == "Odontodiagrama")
        {
          
          redirect('Odontodiagrama_C/Visualizacion_Odonto/'.$id_paciente.'/'.$view_zona.'');
        }
      

      
    }


      //***************************************************************************** 
    /*
      Funcion para ver los trabajos que se le han realizado En la zona x
      @params $zona
    */
    //*****************************************************************************

     public function Odonto_V_zona($zona)
     {
        
        
        $info;
        $paciente =array();
        $size=0;
        $zona = str_replace('-',' ',$zona);
        $info = $this->Odonto_list_model->getDBOdontodiagramaListzona($zona);
        $size=count($info);
        
        
        if($size != 0)
        {
          for ($i=0; $i < $size ; $i++) { 
          
          $pacient[$i] = $info[$i][0];
          
          $paciente[$i] = $this->Odonto_list_model->getpaciente($pacient[$i]);
          
        }
        
        
        $zona = $this->Odonto_list_model->getDBOdontodiagramaListszona($zona);
        $s = count($zona);
        
        $data = array(
                    'info' => $info,
                    'size' => $size,
                    'paciente' => $paciente,
                    
                    'zona' => $zona,
                  );
          $this->load->view('odonto_l_view_zona',$data);
        } 
        else
        {
          redirect('Odontodiagrama_C/Historial_zona');
        }
          
          
        
        
     }

   
     //***************************************************************************** 
    /*
      Funcion para ver los trabajos que se le han realizado al paciente
      @params $doctor 
      @params $paciente
    */
    //*****************************************************************************

     public function Odonto_V($paciente)
     {
        
        
        $info;
        $size=0;
        $info = $this->Odonto_list_model->getDBOdontodiagramaList($paciente);
        $size=count($info);
        $tipo_entrada_IO = "IO";
        
        $zona = $this->Odonto_list_model->getDBOdontodiagramaLists($paciente);
        $s = count($zona);
        
        $data = array(
                    'info' => $info,
                    'size' => $size,
                    'paciente' => $paciente,
                    'zona' => $zona,
                  );
                
        $this->load->view('odonto_l_view',$data);
        
        
     }

     //***************************************************************************** 
    /*
      Funcion para ver vizualizar los trabajos que se le han realizado al paciente
      en una fecha
      
    */
    //*****************************************************************************

    public function Visualizacion_Odonto($paciente,$view)
    {

      
      $view = str_replace('%20',' ',$view);
      try
      {     
            $info = $this->Odonto_Visual_model->DBMasterConsult_For_IO($view);
            $size = count($info);
            $infoS = $this->Odonto_Visual_model->xDBMasterConsult($view);
            $sizeS = count($infoS);
                
      }
      catch (Exception $e)
      {
            echo '- '.$e->getMessage();
            echo '<br>-- Error en la extrasion de los datos desde la DB.<br><br>';
      }
       /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
       if($this->input->post('btn_comment_view') == "Comentarios")
        { 
          $identity = 0;
          redirect('Odontodiagrama_C/Comment/'.$identity.'/'.$view.'/'.$paciente.'');

        }
      $data = array(
                    'info' => $info,
                    'size' => $size,
                    'infoS' => $infoS,
                    'sizeS' => $sizeS,
                    'paciente' => $paciente,
                    'view' => $view,
                  );
      $this->load->view('odonto_visual',$data);




    }

    //***************************************************************************** 
    /*
      Funcion para crear nueva plantilla de Odontodiagrama
      @params $zona 
      @params $paciente
    */
    //*****************************************************************************

    public function Odonto_V_Nuevo($zona,$paciente)
     {
        
        $info;
        $size=0;
        $infoSO;
        
        $sizeSO=0;
        $i=0;

        /*para controlar que no solo se haga una sola vez debo de poner lo siguiente
          $i=0;
          if($i==0)
          {
              Date_time = date("y-m-d H:i:s");
              echo "la Fecha y hora es: ".$Date_time;
              $i=1;
          }
          
          Luego al presionar registro completo $i=0; 

        */
        $Date_time = date("y-m-d H:i:s");
        
          
        $odonto_doctor = $this->Odonto_model->get_medico();
        $odonto_doctores = $this->Odonto_model->get_medicos();
        $count = count($odonto_doctor);
        
          $tipo_entrada_IO = "IO";
          
          
                try {
                  $info = $this->Odonto_V_model->DBMasterConsult_For_IO($paciente);
                  $size=count($info);
                  $infoSO = $this->Odonto_V_model->xDBMasterConsult($paciente);
                  $sizeSO=count($infoSO);

                  
                }catch (Exception $e) {
                  echo '- '.$e->getMessage();
                  echo '<br>-- Error en la extrasion de los datos desde la DB.<br><br>';
                  
                }

                $data = array(
                    'info' => $info,
                    'size' => $size,
                    'infoSO' => $infoSO,
                    'sizeSO' => $sizeSO,
                    'zona' => $zona,
                    'paciente' => $paciente,
                    'datetime' => $Date_time,
                    'odonto_doctor' => $odonto_doctor,
                    'odonto_doctores' => $odonto_doctores,
                    'count' => $count,
                  );
                
                $this->load->view('odontodiagrama_m',$data);
                $d =$this->input->get("d");
                $db =$this->input->get("db");
                
                /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
                if($this->input->post('btn_comment') == "Comentarios")
                { 
                    
                    $identity = 1;
                    redirect('Odontodiagrama_C/Comment/'.$identity.'/'.$zona.'/'.$paciente.'');

                }

                /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
                if($this->input->post('btn_est_IO') == "Establecer estado")
                { 
                    $zona=str_replace('-',' ',$zona);
                    $this->Diente_V_IO($zona,$paciente,$Date_time,$d);
                }
                /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

                /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
                if($this->input->post('btn_est_SO') == "Establecer estado")
                {   
                  
                    $this->Diente_V_SO($zona,$paciente,$Date_time,$db);
                }
                /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

        
    }
    //******************************************************************************************
    /*
      Función para odontodiagrama Inicial
    */
    //******************************************************************************************


    function Diente_V_IO($zona,$paciente,$Date_time,$d)
     {

          $info;
          $size=0;
          $doc =  $this->input->post('Doctor');
          
          $doc =  $this->Odonto_model->get_id_doctor($doc);
          $tipo_entrada_IO = "IO";
          $zona = str_replace('-',' ',$zona);

          

            try {
                   
                  try {
                    if(!($this->input->post('a')=="N/A")){
                         
                         $this->Odonto_V_model->DBOndontodiagramaInsert($paciente, $doc, $this->input->post('a'), $d, 1, $tipo_entrada_IO,$Date_time,$zona);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('b')=="N/A")){
                     $this->Odonto_V_model->DBOndontodiagramaInsert($paciente, $doc, $this->input->post('b'), $d, 4,$tipo_entrada_IO,$Date_time,$zona);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('c')=="N/A")){
                      $this->Odonto_V_model->DBOndontodiagramaInsert($paciente, $doc, $this->input->post('c'), $d, 5,$tipo_entrada_IO,$Date_time,$zona);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('d')=="N/A")){
                      $this->Odonto_V_model->DBOndontodiagramaInsert($paciente, $doc, $this->input->post('d'), $d, 2,$tipo_entrada_IO,$Date_time,$zona);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('e')=="N/A")){
                      $this->Odonto_V_model->DBOndontodiagramaInsert($paciente, $doc, $this->input->post('e'), $d, 3,$tipo_entrada_IO,$Date_time,$zona);
                    }
                  } catch (Exception $e) {
                    $e->getMessage();
                  }

                  try {
                    if(!($this->input->post('f')=="N/A")){
                      $this->Odonto_V_model->DBOndontodiagramaInsert($paciente, $doc, $this->input->post('f'), $d, 0,$tipo_entrada_IO,$Date_time,$zona);
                    }
                  } catch (Exception $e) {
                    $e->getMessage();
                  }

                  

                  try {
                    if(($this->input->post('a')=="Borrar")||($this->input->post('b')=="Borrar")||($this->input->post('c')=="Borrar")||($this->input->post('d')=="Borrar")||($this->input->post('e')=="Borrar")||($this->input->post('f')=="Borrar")){
                      $this->Odonto_V_model->DBOndontodiagramaDelete($paciente,$doc,$d);
                    }
                  } catch (Exception $e) {
                    $e->getMessage();
                  }


                } catch (Exception $e) {
                  $e->getMessage();

                }

                redirect('Odontodiagrama_C/Odonto_V_Nuevo/'.$zona.'/'.$paciente.'');
                
                
               

      }

      //******************************************************************************************
      /*
        Función para odontodiagrama Seguimiento
      */
      //******************************************************************************************

      function Diente_V_SO($zona,$paciente,$Date_time,$db)
     {

          $info;
          $size=0;
          $doc =  $this->input->post('Doctores');
          
          $doc =  $this->Odonto_model->get_id_doctor($doc);
          $tipo_entrada_SO = "SO";


            try {
                    
                  try {
                    if(!($this->input->post('ab')=="N/A")){
                         
                         $this->Odonto_V_model->xDBOndontodiagramaInsert($paciente, $doc, $this->input->post('ab'), $db, 1, $tipo_entrada_SO,$Date_time,$zona);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('bb')=="N/A")){
                     $this->Odonto_V_model->xDBOndontodiagramaInsert($paciente, $doc, $this->input->post('bb'), $db, 4,$tipo_entrada_SO,$Date_time,$zona);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('cb')=="N/A")){
                      $this->Odonto_V_model->xDBOndontodiagramaInsert($paciente, $doc, $this->input->post('cb'), $db, 5,$tipo_entrada_SO,$Date_time,$zona);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('db')=="N/A")){
                      $this->Odonto_V_model->xDBOndontodiagramaInsert($paciente, $doc, $this->input->post('db'), $db, 2,$tipo_entrada_SO,$Date_time,$zona);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('eb')=="N/A")){
                      $this->Odonto_V_model->xDBOndontodiagramaInsert($paciente, $doc, $this->input->post('eb'), $db, 3,$tipo_entrada_SO,$Date_time,$zona);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(!($this->input->post('fb')=="N/A")){
                      $this->Odonto_V_model->xDBOndontodiagramaInsert($paciente, $doc, $this->input->post('fb'), $db, 0,$tipo_entrada_SO,$Date_time,$zona);
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if(($this->input->post('ab')=="Borrar")||($this->input->post('bb')=="Borrar")||($this->input->post('cb')=="Borrar")||($this->input->post('db')=="Borrar")||($this->input->post('eb')=="Borrar")||($this->input->post('fb')=="Borrar")){
                      $this->Odonto_V_model->xDBOndontodiagramaDelete($paciente,$doc,$db);
                    }
                  } catch (Exception $e) {
                    $e->getMessage();
                  }


                } catch (Exception $e) {
                  $e->getMessage();

                }
                

              
              redirect('Odontodiagrama_C/Odonto_V_Nuevo/'.$zona.'/'.$paciente.'');  
                
      }


      //******************************************************************************************
      /*
        Funcion para Registro Completado (Done)
      */
      //******************************************************************************************

      function Done()
      {
          $this->Odonto_V_model->Update_IOandSO__to_IandS();
          redirect('Home');

      }

      //******************************************************************************************
      /*
        Funcion para Borrar Todo (Delete)
      */
      //******************************************************************************************

      function Delete()
      {
          $this->Odonto_V_model->MasterDelete();
          redirect('Odontodiagrama_C');
        
      }


}