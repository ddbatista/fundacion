<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fundación Divino Niño</title>
    <style>
      body{
        color: black;
        margin: 0px auto;
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

      .menu{
        max-width: 600px;
        display: inline-block;
        font-size: 12px;
        vertical-align: middle;
        margin: 10px 0px 10px 0px;
      }

      .menu_debajo{
        font-size: 14px;
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
        width: 500px;
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

      #logo_img{
        width:70px;
        height: auto;
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
        font-size: 10pt;
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
        background: white;
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
                <A HREF="index.html"><img src="logo-fundacion.png" alt="logo" id="logo_img"/></A>
              </article>
              <article class="menu">
                <ul>
                  <li><a href="">Registro</a></li>
                  <li><a href="">Odontodiagrama</a></li>
                  <li><a href="">Plan de tratamiento</a></li>
                  <li><a href="">Reportes</a></li>
                </ul>
              </article>
    </section>


    <section id="cuerpo">

      <article class="art1">
              <article class="menu_debajo">
                <?php
                $tipo_entrada_IO="IO";
                $info;
                $size=0;
                $posNumero = array(18, 17, 16, 15, 14, 13, 12, 11,21, 22, 23, 24, 25, 26, 27, 28, 55, 54, 53, 52, 51, 61, 62, 63, 64, 65, 85, 84, 83, 82, 81, 71, 72, 73, 74, 75, 48, 47, 46, 45, 44, 43, 42, 41, 31, 32, 33, 34, 35, 36, 37, 38);

                function myErrorHandler($code, $error, $errfile , $errline, array $errcontext) {
                  if(0==error_reporting()){
                    return false;
                  }

                  throw new Exception($error . ' encontrado en '. $errfile.', línea '.$errline);
                }
                set_error_handler('myErrorHandler');

                $id_paciente=1;

                try {
                  if($_POST['id_pacienteForList']){
                    $_SESSION['id_pacienteForList']=$_POST['id_pacienteForList'];
                  }
                } catch (Exception $e) {
                }

                try {
                    $id_paciente=$_SESSION['id_pacienteForList'];
                } catch (Exception $e) {
                }


                try {

                  try {
                    $_GET["id_m"];
                  } catch (Exception $e) {
                  }

                  try {
                    $_GET["id_p"];
                  } catch (Exception $e) {
                  }

                } catch (Exception $e) {
                  $e->getMessage();
                }



                function getDBOdontodiagramaList($id_paciente){

                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $db = "test";
                  $info [0] = array(" ", 0, 0);
                  $i=0;

                  try {
                    $conn = mysqli_connect($servername, $username, $password, $db);

                    $sql = "SELECT DISTINCT tipo, MasterTimeStamp FROM odontodiagrama WHERE id_paciente=".$id_paciente." and (tipo LIKE 'I' or tipo LIKE 'S')";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $info [$i] = array($row["tipo"], $row["MasterTimeStamp"]);
                            $i++;
                        }
                    }

                    $conn->close();
                  }catch (Exception $e) {
                    throw $e;
                  }

                  return $info;
                }

                try {
                  $info = getDBOdontodiagramaList($id_paciente);
                  $size=count($info);
                }catch (Exception $e) {
                  echo '- '.$e->getMessage();
                  echo '<br>-- Error en la extrasion de los datos desde la DB.<br><br>';
                }

                echo "<br>Listado de odontodiagramas<br><br><br><br>";

                echo "<ul>";
                  for($i=0; $i<$size; $i++){

                    $tipo="";

                    if($info[$i][0]=="I"){
                      $tipo="Inicial";
                    }else{
                      $tipo="Seguimiento";
                    }
                    echo "<li><a href=\"view_odontodiagrama.php?view=".$info[$i][1]."\" class='linkk'>".$tipo." - ".$info[$i][1]."</a></li><br><br><br>";
                  }
                echo "</ul>";

                ?>
              </article>

      </article>

    </section>


  </body>
</html>
