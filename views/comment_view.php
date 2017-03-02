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
        background-image: url("https://fundacionsdivinoninojesus.com/images/background.png");
      }

      section{
        text-align: center;
      }

      #cabecera{
        background: #3c4b61;
      }

      #art1{
        text-align: left;
        display: inline-block;
        padding: 30px 20px;
        width: 1000px;
        

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

      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        
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
      input[type=text]{
          color: #7d7d7d;
          font-size: 12pt;
          width: 950px;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #eeeeee;
          border-radius: 6px;
          background: #f9f9f9;
      }

      input[type=date]{
          color: #7d7d7d;
          font-size: 12pt;
          width: 950px;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #eeeeee;
          border-radius: 6px;
          background: #f9f9f9;
      }

      form{
        font-family: cursive;
        font-weight: bold;
        color: #2C589B;
        font-size: 15pt;
      }

      input[type=submit] {
          background-color: #5f7594;
          color: white;
          font-weight: bold;
          padding: 5px 8px;
          margin: 30px;
          border-radius: 4px;
          cursor: pointer;
          border: 1px solid #3c4b61;
      }

      input[type=submit]:hover {
          background-color: #4e5f77;
      }

      select{
         /*width: 10px;*/
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
     table {
    border-collapse: collapse;
    width: 100%;
    }

     th, td {
    text-align: center;
    padding: 15px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
    background-color: #3c4b61;
    color: white;
    
    }

     #btn{
      text-align: right;
     }

     #btn article{
      display: inline-block;
     }

     #Trat{
      font-family: cursive;
      font-weight: bold;
      color: #808da1;
      font-size: 14pt;
     }
     #Seg{
        font-family: cursive;
        font-weight: bold;
        color: #00112C;
        font-size: 18pt;
      }
      #textarea{
        font-family: cursive;
        font-weight: bold;
        color: #000000;
        font-size: 12pt;
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
    <section id="cabecera">
              <article id="logo">
               <A HREF="https://fundacionsdivinoninojesus.com/Home"><img src="https://fundacionsdivinoninojesus.com/logo-fundacion.png" alt="logo" id="logo_img"/></A>
              </article>
              <article id="menu">
                <ul>
              <li>
                <div id="dropdown">
                <button id="dropbtn">Registros</button>
                <div id="dropdown-content">
                   <a href="https://fundacionsdivinoninojesus.com/Register">Registro Pacientes</a>
                   <a href="https://fundacionsdivinoninojesus.com/Register_Voluntario">Registro Voluntariado</a>
                   <a href="https://fundacionsdivinoninojesus.com/Register_Localidad">Registro Localidad</a>
                
                </div>
                </li>
                <li>
                <div id="dropdown">
                <button id="dropbtn">Odontodiagramas</button>
                <div id="dropdown-content">
                   <a href="https://fundacionsdivinoninojesus.com/Odontodiagrama_C">Nuevo</a>
                   <a href="https://fundacionsdivinoninojesus.com/Odontodiagrama_C/Historial_zona">Historial Zona</a>
                   <a href="https://fundacionsdivinoninojesus.com/Odontodiagrama_C/Historial_paciente">Historial Paciente</a>
                </div>
                </div>
                </li>
                <li>
                <div id="dropdown">
                <button id="dropbtn">Configuración</button>
                <div id="dropdown-content">
                   <a href="https://fundacionsdivinoninojesus.com/Register/CreateUser">Crear Usuario</a>
                   <a href="https://fundacionsdivinoninojesus.com/login/Logout">Cerrar Sesión</a>
                </div>
                </div>
                </li>
                   
                  </ul>
              </article>
              <!--<article id="menu">
                <ul>
                  <li><a href="https://[::1]/fundacion/Register">Registro Pacientes</a></li>
                  <li><a href="https://[::1]/fundacion/Odontodiagrama_C">Odontodiagrama</a></li>
                  <li><a href="https://[::1]/fundacion/Register_Voluntario">Registro Voluntariado</a></li>
                   
                  <li><a href="">Reportes</a></li>
                  
                  <li><a href="https://[::1]/fundacion/login/Logout">Cerrar Sesión</a></li> 
                </ul>
              </article>-->
    </section>

    <section id="cuerpo">
      <article id="art1">

        <?php
        if($identity==1){
          echo "
                <form action=\"https://[::1]/fundacion/Odontodiagrama_C/Comment/".$identity."/".$zona."/".$id_paciente."\" method=\"post\">

                              <section id=\"btn\">
                                <article>
                                                        <input id=\"btn_back\" name=\"btn_back\" type=\"submit\" value=\"Odontodiagrama\">
                                </article>
                              </section>
                      </form>";}
                      else if($identity==0)
                      {
                        echo "<form action=\"https://[::1]/fundacion/Odontodiagrama_C/Comment/".$identity."/".$zona."/".$id_paciente."\" method=\"post\">

                              <section id=\"btn\">
                                <article>
                                                        <input id=\"btn_back_view\" name=\"btn_back_view\" type=\"submit\" value=\"Odontodiagrama\">
                                </article>
                              </section>

                      </form>";
                      }
                      
                      //<form action="https://[::1]/fundacion/Odontodiagrama_C/Comment/" method='post' enctype="multipart/form-data">
       echo" <section>
          <article id=\"Seg\">

        Tratamientos Y Actividades<br><br><br>

          </article>
        </section>
        <form action=\"https://[::1]/fundacion/Odontodiagrama_C/Comment/".$identity."/".$zona."/".$id_paciente."\" method=\"post\">

      Secuencia de Tratamiento:
      
      <td><article id= \"textarea\"><textarea rows=\"7\" cols=\"15\" autocomplete = \"off\" name=\"outputtext\" style=\"font-family: cursive;color: #000000;font-size: 10pt;width: 99%;\"></textarea></td>
      </article>
      <br>
      <br>

      Fecha:
      
      <input type=\"date\" name=\"date\" autocomplete = \"off\">
      
      <br>
      <br>" ;
      ?>
      <?php
       $codeForDoctorComboBox="
            <br>
            Médico Responsanle:
            <select name=\"doctor\">
            <option value=\"N/A\">Médico Responsable</option>";
            
            
            for($x=0;$x<$count;$x++)
            {

              $codeForDoctorComboBox=$codeForDoctorComboBox."<option value=\"".$odonto_doctor[$x]."\">".$odonto_doctor[$x]." ".$odonto_doctores[$x]."</option>";
            }
            

            $codeForDoctorComboBox=$codeForDoctorComboBox."</select>";
          echo $codeForDoctorComboBox;
          echo "
          <br>
          <br>
          <section id=\"btn\">
            <article>
                     <input id=\"btn_comment_save\" name=\"btn_comment_save\" type=\"submit\" value=\"Guardar\">
            </article>
          </section>
     ";
        echo "
        <section>
       ";
         
        echo "
        
        <article id=\"Seg\">
        Seguimientos
        </article>
        <br>
        <table>
          <tr>
              <th>Fecha de registro</th>
              <th>Secuencia Tratamiento</th>
              <th>Responsable</th>
          </tr>
          
        ";
         for ($i=0; $i < $infoCount; $i++) { 
          echo "<tr>";
          
          for ($j=0; $j < 3 ; $j++) { 
            # code...
            echo "<td>". $info[$i][$j]."</td>";
            //echo $Doctores_Top[$i][$j];
            
          }
           echo "</tr>";
          
        }
        echo "</table>";
        echo "
        
      </article> <br>
    </form>";
  ?>

              
      </article>
    </section>
    
  </body>
</html>
