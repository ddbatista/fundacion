<!DOCTYPE html>
<html>
  <head>
  <link rel="shortcut icon" href="https://www.fundacionsdivinoninojesus.com/logo-fundacion.png"/>
    <meta charset="utf-8">
    <title>Fundación Divino Niño</title>
    <style>
      body{
        color: black;
        margin: 0px auto;
        background-image: url("https://www.fundacionsdivinoninojesus.com/images/background.png");
      }

      section{
        text-align: center;
        vertical-align: top;
      }

      #cabecera{
        background: #3c4b61;
      }

      .art1{
        text-align: left;
        display: inline-block;
        padding: 30px 15px;
        vertical-align: top;
      }


      #art2{
        text-align: center;
        display: inline-block;
        padding: 30px 20px;
        font-weight: bold;
        color: #808da1;
        font-size: 10pt;
        vertical-align: top;
      }

      #logo{
        max-width: 300px;
        display: inline-block;
        margin: 0px 500px 0px 0px;
        vertical-align: middle;
      }

      #menu{
        max-width: 800px;
        display: inline-block;
        font-size: 13px;
        vertical-align: middle;
        margin: 10px 0px 10px 0px;
      }

      #logo_img{
        width:100px;
        height: auto;
      }

      .menu_debajo{
        max-width: 600px;
        display: inline-block;
        font-size: 12px;
        vertical-align: middle;
        margin: 10px 0px 10px 0px;
      }

      .linkk{
        border: 1px solid #3c4b61;
        font-size: 12pt;
        /*background: white;*/
        border-radius: 20px 20px 20px 20px;
        display: block;
        color: #3c4b61;
        text-align: center;
        padding: 3px 15px;
        text-decoration: none;
      }

      #aa{
        font-size: 10px;
      }

      #aa:link
      {
        font-size: 10px;
        text-decoration:none;
        color: #3c4b61;
      }

      #aa:visited
      {
        font-size: 10px;
        text-decoration:none;
        color: #3c4b61;
      }


      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
      }

      li {
        float: left;
        margin: 0px 10px 0px 0px;
      }

      li a {
        border: 1px solid white;
        /*background: white;*/
        border-radius: 20px 20px 20px 20px;
        display: block;
        color: #d9d9d9;
        text-align: center;
        padding: 3px 15px;
        text-decoration: none;
      }

      li a:hover {
          border-radius: 20px 20px 20px 20px;
          background: white;
          color: #3c4b61;
       }

       select{
          width: 190px;
          color: #7d7d7d;
          font-size: 12pt;
          /*padding: 6px 10px;*/
          padding: 10px 10px;
          margin: 8px 8px;
          display: inline-block;
          border: 1px solid #eeeeee;
          border-radius: 40px 40px 40px 40px;
          border-radius: 6px;
          background: #f9f9f9;
      }

      form{
        font-weight: bold;
        color: #808da1;
        font-size: 13pt;
      }

      .Odig{
        padding: 0px 0px 0px 0px;
        margin: 0px 10px 0px 0px;
        width: 41px;
        height: 43px;
        display: inline-block;
      }

      .Odig img{
        padding: 0px 0px 0px 0px;
        margin: 0px 0px 0px 0px;
        float: left;
      }

      .Odig p{
        padding: 0px 0px 0px 0px;
        margin: 0px 0px 0px 0px;
        text-align: center;
        
        color: black;
      }

      .Odigs{
        text-align: center;
        width: 1000px;
        min-width: 800px;
        min-height: 500px;
        border: 1px solid #eeeeee;
        border-radius: 6px;
        padding: 5px 5px;
      }

      input[type=submit] {
          background-color: #5f7594;
          color: white;
          padding: 5px 8px;
          margin: 30px;
          border-radius: 4px;
          cursor: pointer;
          border: 1px solid #3c4b61;
      }

      input[type=submit]:hover {
          background-color: #4e5f77;
      }

     #btn{
      text-align: right;
     }

     #btn article{
      display: inline-block;
     }

         #dropbtn {
    background-color: #3C4B61;
    color: white;
    border: none;
    cursor: pointer;
    border: 1px solid white;
    border-radius: 20px 20px 20px 20px;
    display: block;
    color: #d9d9d9;
    text-align: center;
    padding: 3px 15px;
    text-decoration: none;

   }

  #dropdown {
    
    display: inline-block; 
   }

  #dropdown-content {

    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0  .2);
  }

  #dropdown-content a {
    border: 1px solid white;
        /*background: white;*/
    border-radius: 20px 20px 20px 20px;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  #dropdown-content a:hover {background-color: #BFD2EE}

  #dropdown:hover   #dropdown-content {
    display: block;
    border: 1px solid white;
        /*background: white;*/
    border-radius: 20px 20px 20px 20px;
  }

  #dropdown:hover   #dropbtn {
    background: white;
    color: #3c4b61;
  }
    </style>
  </head>
  <body>

    <script>
      window.onload=function(){
        var pos=window.name || 0;
        window.scrollTo(0,pos);
      }

      window.onunload=function(){
        window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);
      }
    </script>

    <section id="cabecera">
              <article id="logo">
                <A HREF="https://www.fundacionsdivinoninojesus.com/Home"><img src="https://www.fundacionsdivinoninojesus.com/logo-fundacion.png" alt="logo" id="logo_img"/></A>
               <!-- <?php 
          $attributes = array("class" => "form-horizontal", "id" => "Odonto_V_Cform", "name" => "Odonto_V_Cform"); 
          echo form_open("Odontodiagrama_C/Odonto_V_Nuevo", $attributes);?> -->
              </article>
              <article id="menu">
                <ul>
              <li>
                <div id="dropdown">
                <button id="dropbtn">Registros</button>
                <div id="dropdown-content">
                   <a href="https://www.fundacionsdivinoninojesus.com/Register">Registro Pacientes</a>
                   <a href="https://www.fundacionsdivinoninojesus.com/Register_Voluntario">Registro Voluntariado</a>
                   <a href="https://www.fundacionsdivinoninojesus.com/Register_Localidad">Registro Localidad</a>
               </div>
                </li>
                <li>
                <div id="dropdown">
                <button id="dropbtn">Odontodiagramas</button>
                <div id="dropdown-content">
                   <a href="https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C">Nuevo</a>
                   <a href="https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Historial_zona">Historial Zona</a>
                   <a href="https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Historial_paciente">Historial Paciente</a>
                </div>
                </div>
                </li>
                <li>
                <div id="dropdown">
                <button id="dropbtn">Configuración</button>
                <div id="dropdown-content">
                   <a href="https://www.fundacionsdivinoninojesus.com/Register/CreateUser">Crear Usuario</a>
                   <a href="https://www.fundacionsdivinoninojesus.com/login/Logout">Cerrar Sesión</a>
                </div>
                </div>
                </li>
                   
                  </ul>
              </article>
    </section>


    <section id="cuerpo">

      <article class="art1">
              <article class="Odigs">
                <?php
                
                $posNumero = array(18, 17, 16, 15, 14, 13, 12, 11,21, 22, 23, 24, 25, 26, 27, 28, 55, 54, 53, 52, 51, 61, 62, 63, 64, 65, 85, 84, 83, 82, 81, 71, 72, 73, 74, 75, 48, 47, 46, 45, 44, 43, 42, 41, 31, 32, 33, 34, 35, 36, 37, 38);

                /*
                try {

                  try {
                    if( ( $_GET["reg"]=="0") ){
                      MasterDelete();
                    }
                  } catch (Exception $e) {
                  }

                  try {
                    if( ( $_GET["reg"]=="1") ){
                      Update_IOandSO__to_IandS();
                    }
                  } catch (Exception $e) {
                  }

                  */
                  
                  function myErrorHandler($code, $error, $errfile , $errline, array $errcontext) {
                  if(0==error_reporting()){


                    return false;
                  }

                  throw new Exception($error . ' encontrado en '. $errfile.', línea '.$errline);
                }
                set_error_handler('myErrorHandler');
                 echo "
                 ";
                echo "
                <form action=\"https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Odonto_V_Nuevo/".$zona."/".$paciente."\" method=\"post\">
                                                <section id=\"btn\">
                                <article>
                                 <input id=\"btn_comment\" name=\"btn_comment\" type=\"submit\" value=\"Comentarios\">
                                </article>
                              </section>
                      
                      </form>"; 

                 echo "<br>ODONTODIAGRAMA INICIAL<br><br><br><br>";

                $posDienteActualArrayDB=0;

                  for($i=0; $i<52; $i++){
                    $statePosicionConInf=0;
                    $tempPosDienteActual=0;
                    $arrayTemp=array(" ", 0, 0);
                    $sizeArrayTemp=0;
                    $diagDienteCompleto=0;
                    $tipoDiagCompletoAMostrar=0; /*0: nada 1:Extracción 2:No erupcionado 3: Perdida Dental
                                                 4: temporales*/

                          // echo "size ".$size;                    
                    
                      for($tempI=0; $tempI<$size; $tempI++){
                        if($info[$tempI][1]==$posNumero[$i]){

                          //Si se encuentra uno de los siguiente casos el diente sera marcado con este...
                          //Por completo!

                          if(($info[$tempI][0]=='Extracción') || ($info[$tempI][0]=='Perdida Dental') || ($info[$tempI][0]=='Protesis Fija') || ($info[$tempI][0]=='Temporales Sanos') || ($info[$tempI][0]=='No Erupcionado')){
                            
                            $diagDienteCompleto=1;

                            switch ($info[$tempI][0]) {
                              case 'Extracción':
                                  $tipoDiagCompletoAMostrar=1;
                                break;

                              case 'Perdida Dental':
                                  $tipoDiagCompletoAMostrar=2;
                                break;

                              case 'Protesis Fija':
                                  $tipoDiagCompletoAMostrar=3;
                                break;

                              case 'Temporales Sanos':
                                  $tipoDiagCompletoAMostrar=4;
                                break;

                              case 'No Erupcionado':
                                  $tipoDiagCompletoAMostrar=5;
                                break;

                              default:
                                # code...
                                break;
                            }

                         }

                          //echo "> > >".$info[$tempI][0]."-".$info[$tempI][1]."-".$info[$tempI][2];
                          $arrayTemp[$sizeArrayTemp]=$info[$tempI];
                          ++$sizeArrayTemp;
                          $statePosicionConInf=1;
                        }
                      }

                      //echo count($arrayTemp);
                      //<A HREF=\"https://www.fundacionsdivinoninojesus.com/Odonto_V_C?d=".$posNumero[$i]."\">";
                      //<form action=\"https://www.fundacionsdivinoninojesus.com/Odonto_V_C?d=".$posNumero[$i]."\" method=\"get\">
                      // <form action=\"https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Odonto_V_Nuevo/".$zona."/".$paciente."/?d=".$posNumero[$i]."\" method=\"get\">
                    echo "<article class=\"Odig\">
                                      <p>".$posNumero[$i]."</p>
                                <form action=\"https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Odonto_V_Nuevo/".$zona."/".$paciente."/?d=".$posNumero[$i]."\" method=\"get\">
                                <A HREF=\"https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Odonto_V_Nuevo/".$zona."/".$paciente."/?d=".$posNumero[$i]."\">";
                                     
                                      
                                      for($x=1; $x<=5; $x++){

                                          if($diagDienteCompleto==1){


                                            switch ($tipoDiagCompletoAMostrar) {
                                              case 1:
                                                echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_ex_0".$x.".png\" alt=\"\">";
                                                break;

                                              case 2:
                                                  echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/o_perdida_dentaria_0".$x.".png\" alt=\"\">";
                                                break;

                                              case 3:
                                                  echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/o_protesis_fijas_0".$x.".png\" alt=\"\">";
                                                break;

                                              case 4:
                                                  echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/o_temporales_0".$x.".png\" alt=\"\">";
                                                break;

                                              case 5:
                                                  echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/o_no_erupcionado_0".$x.".png\" alt=\"\">";
                                                break;

                                              default:
                                                # code...
                                                break;
                                            }

                                          }else if(($statePosicionConInf==1)&&($arrayTemp[$tempPosDienteActual][2]==$x)&&($arrayTemp[$tempPosDienteActual][0]=='Cariada')) {
                                            //echo "Posicion: ".$arrayTemp[$tempPosDienteActual][2];
                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_rojo_0".$x.".png\" alt=\"\">";

                                            if(isset($arrayTemp[$tempPosDienteActual+1])){
                                              //echo "la variable x es:".$x." ";
                                              ++$tempPosDienteActual;
                                            }
                                          

                                          }else if(($statePosicionConInf==1)&&($arrayTemp[$tempPosDienteActual][2]==$x)){

                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_azul_0".$x.".png\" alt=\"\">";

                                            if(isset($arrayTemp[$tempPosDienteActual+1])){
                                              ++$tempPosDienteActual;
                                            }

                                          }else{

                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_gris_0".$x.".png\" alt=\"\">";
                                            /*try {


                                              echo "<br><br>".$arrayTemp[$tempPosDienteActual][0]."-".$arrayTemp[$tempPosDienteActual][1]."-".$arrayTemp[$tempPosDienteActual][2]."<br><br>";
                                            } catch (Exception $e) {
                                              
                                            }


                              
                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_gris_0".$x.".png\" alt=\"\">";
                                          }*/
                                        }
                                      }
                                      echo "</A>
                                      </form>
                                    </article>";
                                    //</form>
                                    if(($i==7)||($i==20)||($i==30)||($i==43)){
                                      echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                                    }

                                    if(($i==15)||($i==25)||($i==35)){
                                      echo "<br><br><br>";
                                    }
                  }
                ?>
              </article>

      </article>


      <article id="art2">

        <?php
          //<form action=\"https://www.fundacionsdivinoninojesus.com/Odonto_V_C?d=".$_GET["d"]."\" method=\"post\">
        /*<option value=\"Extracción\">Extracción</option>
              <option value=\"Pulpotomia\">Pulpotomia</option>
              <option value=\"Borrar\">-- Borrar --</option>*/
        try {
            echo "<h2>DIENTE #".$_GET["d"]."</h2>";
            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_ex.png\" alt=\"\">";
            echo "
            <form action=\"https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Odonto_V_Nuevo/".$zona."/".$paciente."/?d=".$_GET["d"]."\" method=\"post\">";

            $formComboBox="<select  name=\"a\">
            <option value=\"N/A\">V</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              
            </select>
            <br>

            <select  name=\"b\">
            <option value=\"N/A\">M/D</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              
            </select>
            <br>

            <select  name=\"c\">
            <option value=\"N/A\">P</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>

            </select>
            <br>

            <select  name=\"d\">
            <option value=\"N/A\">D/M</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              
            </select>
            <br>

            <select  name=\"e\">
            <option value=\"N/A\">O/I</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
            </select>
            <br>
            <select name=\"f\">
            <option value=\"N/A\">Borrado & Otros casos</option>
              <option value=\"Extracción\">Extracción</option>
              <option value=\"Perdida Dental\">Perdida Dental</option>
              <option value=\"Protesis Fija\">Protesis Fija</option>
              <option value=\"Temporales Sanos\">Temporales Sanos</option>
              <option value=\"No Erupcionado\">No Erupcionado</option>
              <option value=\"Borrar\">-- Borrar --</option>
            </select>

            
            ";

           $codeForDoctorComboBox="
            <br>
            <select name=\"Doctor\">
            <option value=\"N/A\">Medico Responsable</option>";
            
            //echo $count." esta es la cantidad";
            for($x=0;$x<$count;$x++)
            {

              $codeForDoctorComboBox=$codeForDoctorComboBox."<option value=\"".$odonto_doctor[$x]."\">".$odonto_doctor[$x]." ".$odonto_doctores[$x]."</option>";
            }
            //echo form_dropdown('odonto_doctor',$odonto_doctor, set_value('odonto_doctor'), $attributes);

            $codeForDoctorComboBox=$codeForDoctorComboBox."</select>";


            
            echo $formComboBox.$codeForDoctorComboBox;

            echo "<br>
                        <input id=\"btn_est_IO\" name=\"btn_est_IO\" type=\"submit\" value=\"Establecer estado\">
                        </form>";

            echo "<A id='aa' HREF=\"https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Odonto_V_Nuevo/".$zona."/".$paciente."\"> - CERRAR - </A>";
            /*
            <br>
                        <input id=\"btn_est_IO\" name=\"btn_est_IO\" type=\"submit\" value=\"Establecer estado\">
                        </form>";

            echo "<A id='aa' HREF=\"https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Odonto_V_Nuevo/".$paciente."/".$doctor."\"> - CERRAR - </A>"
          */

        } catch (Exception $e) {
        }


        ?>

      </article>

      <article name="h" class="art1">
              <article class="Odigs">
                <?php
                
                
                

                echo "<br>ODONTODIAGRAMA SEGUIMIENTO<br><br><br><br>";


                $posDienteActualArrayDB=0;

                  for($i=0; $i<52; $i++){
                    $statePosicionConInf=0;
                    $tempPosDienteActual=0;
                    $arrayTemp=array(" ", 0, 0);
                    $sizeArrayTemp=0;
                    $extrasion=0;
                    $diagDienteCompleto=0;
                    $tipoDiagCompletoAMostrar=0; /*0: nada 1:Extracción 2:No erupcionado 3: Perdida Dental
                                                 4: temporales*/

                      for($tempI=0; $tempI<$sizeSO; $tempI++){
                        if($infoSO[$tempI][1]==$posNumero[$i]){

                          /*if(($infoSO[$tempI][0]=='Extracción') || ($infoSO[$tempI][0]=='Pulpotomia')){
                            $extrasion=1;
                          }*/

                          if(($infoSO[$tempI][0]=='Extracción') || ($infoSO[$tempI][0]=='Perdida Dental') || ($infoSO[$tempI][0]=='Protesis Fija') || ($infoSO[$tempI][0]=='Temporales Sanos') || ($infoSO[$tempI][0]=='No Erupcionado')){

                            $diagDienteCompleto=1;

                            switch ($infoSO[$tempI][0]) {
                              case 'Extracción':
                                  $tipoDiagCompletoAMostrar=1;
                                break;

                              case 'Perdida Dental':
                                  $tipoDiagCompletoAMostrar=2;
                                break;

                              case 'Protesis Fija':
                                  $tipoDiagCompletoAMostrar=3;
                                break;

                              case 'Temporales Sanos':
                                  $tipoDiagCompletoAMostrar=4;
                                break;

                              case 'No Erupcionado':
                                  $tipoDiagCompletoAMostrar=5;
                                break;

                              default:
                                # code...
                                break;
                            }

                          }

                          $arrayTemp[$sizeArrayTemp]=$infoSO[$tempI];
                          ++$sizeArrayTemp;
                          $statePosicionConInf=1;
                        }
                      }

                    echo "<article class=\"Odig\">
                                      <p>".$posNumero[$i]."</p>
                                <form action=\"https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Odonto_V_Nuevo/".$zona."/".$paciente."/?db=".$posNumero[$i]."\" method=\"get\">
                                <A HREF=\"https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Odonto_V_Nuevo/".$zona."/".$paciente."/?db=".$posNumero[$i]."\">";

                                    

                                    for($x=1; $x<=5; $x++){

                                          if($diagDienteCompleto==1){


                                            switch ($tipoDiagCompletoAMostrar) {
                                              case 1:
                                                echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_ex_0".$x.".png\" alt=\"\">";
                                                break;

                                              case 2:
                                                  echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/o_perdida_dentaria_0".$x.".png\" alt=\"\">";
                                                break;

                                              case 3:
                                                  echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/o_protesis_fijas_0".$x.".png\" alt=\"\">";
                                                break;

                                              case 4:
                                                  echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/o_temporales_0".$x.".png\" alt=\"\">";
                                                break;

                                              case 5:
                                                  echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/o_no_erupcionado_0".$x.".png\" alt=\"\">";
                                                break;

                                              default:
                                                # code...
                                                break;
                                            }
                                          }else if (($statePosicionConInf==1)&&($arrayTemp[$tempPosDienteActual][2]==$x)&&($arrayTemp[$tempPosDienteActual][0]=='Cariada')) {

                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_rojo_0".$x.".png\" alt=\"\">";

                                            if(isset($arrayTemp[$tempPosDienteActual+1])){
                                              ++$tempPosDienteActual;
                                            }

                                          }else if(($statePosicionConInf==1)&&($arrayTemp[$tempPosDienteActual][2]==$x)){

                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_azul_0".$x.".png\" alt=\"\">";

                                            if(isset($arrayTemp[$tempPosDienteActual+1])){
                                              ++$tempPosDienteActual;
                                            }

                                          }else{
                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_gris_0".$x.".png\" alt=\"\">";
                                          }
                                      }


                                     /* for($x=1; $x<=5; $x++){
                                          if($extrasion==1){

                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_ex_0".$x.".png\" alt=\"\">";

                                          }else if (($statePosicionConInf==1)&&($arrayTemp[$tempPosDienteActual][2]==$x)&&($arrayTemp[$tempPosDienteActual][0]=='Cariada')) {

                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_rojo_0".$x.".png\" alt=\"\">";

                                            if(isset($arrayTemp[$tempPosDienteActual+1])){
                                              ++$tempPosDienteActual;
                                            }

                                          }else if(($statePosicionConInf==1)&&($arrayTemp[$tempPosDienteActual][2]==$x)){

                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_azul_0".$x.".png\" alt=\"\">";

                                            if(isset($arrayTemp[$tempPosDienteActual+1])){
                                              ++$tempPosDienteActual;
                                            }

                                          }else{
                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_gris_0".$x.".png\" alt=\"\">";
                                          }
                                      }*/
                                      echo "</A>
                                      </form>
                                    </article>";

                                    if(($i==7)||($i==20)||($i==30)||($i==43)){
                                      echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                                    }

                                    if(($i==15)||($i==25)||($i==35)){
                                      echo "<br><br><br>";
                                    }
                  }
                ?>
              </article>

      </article>

      <article id="art2">

        <?php

        try {
            echo "<h2>DIENTE #".$_GET["db"]."</h2>";
            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_ex.png\" alt=\"\">";
            echo "
            <form action=\"https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Odonto_V_Nuevo/".$zona."/".$paciente."/?db=".$_GET["db"]."\" method=\"post\">";

            $formComboBox = "

            <select name=\"ab\">
            <option value=\"N/A\">V</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              
            </select>
            <br>

            <select name=\"bb\">
            <option value=\"N/A\">M/D</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              
            </select>
            <br>

            <select name=\"cb\">
            <option value=\"N/A\">P</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              
            </select>
            <br>

            <select name=\"db\">
            <option value=\"N/A\">D/M</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              <
            </select>
            <br>

            <select name=\"eb\">
            <option value=\"N/A\">O/I</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              
            </select>

            <br>


            <select name=\"fb\">
            <option value=\"N/A\">Borrado & Otros casos</option>
            <option value=\"Extracción\">Extracción</option>
            <option value=\"Perdida Dental\">Perdida Dental</option>
            <option value=\"Protesis Fija\">Protesis Fija</option>
            <option value=\"Temporales Sanos\">Temporales Sanos</option>
            <option value=\"No Erupcionado\">No Erupcionado</option>
            <option value=\"Borrar\">-- Borrar --</option>
            </select>
              ";


           // <input id=\"btn_est_SO\" name=\"btn_est_SO\" type=\"submit\" value=\"Establecer estado\">
             //           </form>";
            $codeForDoctorComboBox="
            <br>
            <select name=\"Doctores\">
            <option value=\"N/A\">Medico Responsable</option>";
            
            //echo $count." esta es la cantidad";
            for($x=0;$x<$count;$x++)
            {

              $codeForDoctorComboBox=$codeForDoctorComboBox."<option value=\"".$odonto_doctor[$x]."\">".$odonto_doctor[$x]." ".$odonto_doctores[$x]."</option>";
            }
            //echo form_dropdown('odonto_doctor',$odonto_doctor, set_value('odonto_doctor'), $attributes);

            $codeForDoctorComboBox=$codeForDoctorComboBox."</select>";


            
            echo $formComboBox.$codeForDoctorComboBox;

            echo "

            <br>
            <input id=\"btn_est_SO\" name=\"btn_est_SO\" type=\"submit\" value=\"Establecer estado\">
                      </form>";

            echo "<A id='aa' HREF=\"https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Odonto_V_Nuevo/".$zona."/".$paciente."\"> - CERRAR - </A>";


        } catch (Exception $e) {
        }


        ?>

      </article>

      <br>
      <br>
      <br>
          
      <article class="menu_debajo">
        <ul>

          <li><a href="https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Done" class="linkk">Registro completado</a></li>

          <li><a href="https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Delete" class="linkk">Borrar todo</a></li>
        </ul>
      </article>

      <br>
      <br>


    </section>


  </body>
</html>
