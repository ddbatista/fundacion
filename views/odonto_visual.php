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


                function myErrorHandler($code, $error, $errfile , $errline, array $errcontext) {
                  if(0==error_reporting()){
                    return false;
                  }

                  throw new Exception($error . ' encontrado en '. $errfile.', línea '.$errline);
                }
                set_error_handler('myErrorHandler');

                /*
                $view="";

                try {
                   $view=$_GET["view"];
                } catch (Exception $e) {
                }*/
/*
                function DBMasterConsult_For_IO($_view){

                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $db = "test";
                  $info [0] = array(" ", 0, 0);
                  $i=0;

                  try {
                    $conn = mysqli_connect($servername, $username, $password, $db);
                      //echo "SELECT id, id_paciente, id_medico, accion, posicionDiente, zonaDiente  FROM odontodiagrama WHERE id_paciente =".$id_paciente." && posicionDiente=".$posicionDiente." ORDER BY posicionDiente, zonaDiente";
                      $sql = "SELECT id, id_paciente, id_medico, accion, posicionDiente, zonaDiente FROM odontodiagrama WHERE tipo='I' && MasterTimeStamp=\"".$_view."\" ORDER BY posicionDiente, zonaDiente";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $info [$i] = array( $row["accion"], $row["posicionDiente"], $row["zonaDiente"]);
                            $i++;
                        }
                    }

                    $conn->close();
                  }catch (Exception $e) {
                    throw $e;
                  }

                  return $info;
                }*/
                /*
                try {
                  $info = DBMasterConsult_For_IO($view);
                  $size=count($info);
                }catch (Exception $e) {
                  echo '- '.$e->getMessage();
                  echo '<br>-- Error en la extrasion de los datos desde la DB.<br><br>';
                  //echo $e->getMessage();
                }*/
                echo " <form action=\"https://www.fundacionsdivinoninojesus.com/Odontodiagrama_C/Visualizacion_Odonto/".$paciente."/".$view."\" method=\"post\">
                              <section id=\"btn\">
                                <article>
                                 <input id=\"btn_comment_view\" name=\"btn_comment_view\" type=\"submit\" value=\"Comentarios\">
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
                    $extrasion=0;
                    $diagDienteCompleto=0;
                    $tipoDiagCompletoAMostrar=0; /*0: nada 1:Extracción 2:No erupcionado 3: Perdida Dental
                                                 4: temporales*/

                      for($tempI=0; $tempI<$size; $tempI++){
                        if($info[$tempI][1]==$posNumero[$i]){

                          /*if(($info[$tempI][0]=='Extracción') || ($info[$tempI][0]=='Pulpotomia')){
                            $extrasion=1;
                          }*/
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

                    echo "<article class=\"Odig\">
                                      <p>".$posNumero[$i]."</p>";

                                      //echo "Ante del for, State".$statePosicionConInf;
                                      for($x=1; $x<=5; $x++){
                                         /* if($extrasion==1){

                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_ex_0".$x.".png\" alt=\"\">";

                                          }else if (($statePosicionConInf==1)&&($arrayTemp[$tempPosDienteActual][2]==$x)&&($arrayTemp[$tempPosDienteActual][0]=='Cariada')) {

                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_rojo_0".$x.".png\" alt=\"\">";

                                            if(isset($arrayTemp[$tempPosDienteActual+1])){
                                              ++$tempPosDienteActual;
                                            }*/
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

                                          }else if(($statePosicionConInf==1)&&($arrayTemp[$tempPosDienteActual][2]==$x)){

                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_azul_0".$x.".png\" alt=\"\">";

                                            if(isset($arrayTemp[$tempPosDienteActual+1])){
                                              ++$tempPosDienteActual;
                                            }

                                          }else{
                                            echo "<img src=\"https://www.fundacionsdivinoninojesus.com/images/odontodiagrama_gris_0".$x.".png\" alt=\"\">";
                                          }
                                      }
                                      echo "</article>";

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

      <article name="h" class="art1">
              <article class="Odigs">
                <?php
                
/*
                function xDBMasterConsult($viewo){

                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $db = "test";
                  $info [0] = array(" ", 0, 0);
                  $i=0;

                  try {
                    $conn = mysqli_connect($servername, $username, $password, $db);
                      //echo "SELECT id, id_paciente, id_medico, accion, posicionDiente, zonaDiente  FROM odontodiagrama WHERE id_paciente =".$id_paciente." && posicionDiente=".$posicionDiente." ORDER BY posicionDiente, zonaDiente";
                      $sql = "SELECT id, id_paciente, id_medico, accion, posicionDiente, zonaDiente  FROM odontodiagrama WHERE tipo='S' && MasterTimeStamp =\"".$viewo."\"  ORDER BY posicionDiente, zonaDiente";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $info [$i] = array( $row["accion"], $row["posicionDiente"], $row["zonaDiente"]);
                            $i++;
                        }
                    }

                    $conn->close();
                  }catch (Exception $e) {
                    throw $e;
                  }

                  return $info;
                }*/

                
                /*
                try {
                  $info = xDBMasterConsult($view);
                  $size=count($info);
                  /*for($x = 0; $x < $size; $x++ ){
                    echo $info[$x][0]."<br>";
                  }
                }catch (Exception $e) {
                  echo '- '.$e->getMessage();
                  echo '<br>-- Error en la extrasion de los datos desde la DB.<br><br>';
                  //echo $e->getMessage();
                }*/

                echo "<br>ODONTODIAGRAMA SEGUIMIENTO<br><br><br><br>";

                $posDienteActualArrayDB=0;

                  for($i=0; $i<52; $i++){
                    $statePosicionConInf=0;
                    $tempPosDienteActual=0;
                    $arrayTemp=array(" ", 0, 0);
                    $sizeArrayTemp=0;
                    $extrasion=0;

                      for($tempI=0; $tempI<$sizeS; $tempI++){
                        if($infoS[$tempI][1]==$posNumero[$i]){

                          if(($infoS[$tempI][0]=='Extracción') || ($infoS[$tempI][0]=='Pulpotomia')){
                            $extrasion=1;
                          }

                          //echo "> > >".$info[$tempI][0]."-".$info[$tempI][1]."-".$info[$tempI][2];
                          $arrayTemp[$sizeArrayTemp]=$infoS[$tempI];
                          ++$sizeArrayTemp;
                          $statePosicionConInf=1;
                        }
                      }

                    echo "<article class=\"Odig\">
                                      <p>".$posNumero[$i]."</p>";

                                      //echo "Ante del for, State".$statePosicionConInf;
                                      for($x=1; $x<=5; $x++){
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
                                      }
                                      echo "</article>";

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


    </section>


  </body>
</html>
