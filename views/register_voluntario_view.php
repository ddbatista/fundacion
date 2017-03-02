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
        font-weight: bold;
        color: #808da1;
        font-size: 13pt;
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

     input[type=reset] {
         background-color: #5f7594;
         color: white;
         padding: 5px 8px;
         margin: 30px;
         border-radius: 4px;
         cursor: pointer;
         border: 1px solid #3c4b61;
     }

     input[type=reset]:hover {
         background-color: #4e5f77;
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
      <article id="art1">
        <br><br>
             <body>
 <div class="container">
    <div class="row"> 
        <div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
        <!--<legend>Registrar Pacientes</legend>-->
        <?php 
        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
        echo form_open("Register_Voluntario", $attributes);?> 
        
            
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="firstname" class="control-label">Nombres</label>
            </div>
            <div class="col-lg-8 col-sm-8">

                <input id="firstname" name="firstname" autocomplete="off" type="text" class="form-control"  value="<?php echo set_value('firstname'); ?>" />
                <br><br>
                <span class="text-danger"><?php echo form_error('firstname'); ?></span>
            </div>
            </div>
            </div>
            


            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="lastname" class="control-label">Apellidos</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="lastname" name="lastname" autocomplete="off" type="text" class="form-control"  value="<?php echo set_value('lastname'); ?>" />
                <br><br>
                <span class="text-danger"><?php echo form_error('lastname'); ?></span>
            </div>
            </div>
            </div>


            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="pacienttel" class="control-label"></label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input type="radio" name="gender" value="male"> Masculino<br>
              <input type="radio" name="gender" value="female">Femenino<br>
               <br><br> 
            </div>
            </div>
            </div>

            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="edad" class="control-label">Edad</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="edad" name="edad" autocomplete="off" type="text" class="form-control"  value="<?php echo set_value('edad'); ?>" />
                <br><br> 
                <span class="text-danger"><?php echo form_error('edad'); ?></span>
            </div>
            </div>
            </div>


            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="bday" class="control-label">Fecha de Nacimiento</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input type="date" name="bday"><br>
                <br><br>
                
            </div>
            </div>
            </div>
            



            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="contacto" class="control-label">Contacto</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="contacto" name="contacto" autocomplete="off" type="text" class="form-control"  value="<?php echo set_value('contacto'); ?>" />
                <br><br>
                <span class="text-danger"><?php echo form_error('contacto'); ?></span>
            </div>
            </div>
            </div>
            
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="direccion" class="control-label">Direccion</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="direccion" name="direccion" autocomplete="off" type="text" class="form-control"  value="<?php echo set_value('direccion'); ?>" />
                <br><br>
                <span class="text-danger"><?php echo form_error('direccion'); ?></span>
            </div>
            </div>
            </div>
            

            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="Voluntariado" class="control-label"></label>
            </div>
            <div class="col-lg-8 col-sm-8">
            
                <select name="Voluntariado"> 
              <option value="N/A">Voluntariado</option>
                <option value="Padre Eduardo">Padre Eduardo</option>
                <option value="Doctor Jay">Doctor Jay</option>
                <option value="Director/a">Director/a</option>
                <option value="Sub-Director/a">Sub-Director/a</option>
                <option value="Doctor/a Inabie">Doctor/a Inabie</option>
                <option value="Doctor Voluntaro/a">Doctor Voluntaro/a</option>
                <option value="Asistente">Asistente</option>
                
                <option value="Otro">Otro</option>
              </select>
              <br>
                
                <span class="text-danger"><?php echo form_error('Voluntariado'); ?></span>
                
            </div>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
                <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Completar" />
                <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancel" />
                
            </div>
            </div>
            
        <!--</fieldset> -->
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        <!--</div> -->
     </div>
</div>
 
      </article>
    </section>
  </body>
</html>
