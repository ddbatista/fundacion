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
      }

      #art1{
        text-align: left;
        display: inline-block;
        padding: 10px 10px;
        width: 850px;
      }

      #logo{
        max-width: 300px;
        display: inline-block;
        margin: 0px 300px 0px 0px;
      }

      #menu{
        max-width: 500px;
        display: inline-block;
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
        background: white;
        margin: 0px 10px 0px 0px;
      }

      li a {
        border: 1px solid #808080;
        border-radius: 20px 20px 20px 20px;
        display: block;
        color: #808080;
        text-align: center;
        padding: 5px 13px;
        text-decoration: none;
      }

      li a:hover {
          border: 1px solid #cccccc;
          border-radius: 20px 20px 20px 20px;
          color:  #cccccc;
      }

    </style>
  </head>
  <body>
    <section id="cabecera">
              <article id="logo">
                <img src="../logo-fundacion.png" alt="logo" id="logo_img"/>
              </article>
              <article id="menu">
                <ul>
                  <li><a href="http://[::1]/fundacion/index.php/Register">Registro</a></li>
                  <li><a href="">Odontodiagrama</a></li>
                  <li><a href="http://[::1]/fundacion/index.php/Actividades">Plan de tratamiento</a></li>
                  <li><a href="">Reportes</a></li>
                </ul>
              </article>
    </section>

    <section id="cuerpo">
      <article id="art1">
        <br><br>
              <div class="container">
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="actividad" class="control-label">Actividad</label>
            </div>
            <div class="col-lg-8 col-sm-8">
            
                <?php
                $attributes = 'class = "form-control" id = "actividad"';
                echo form_dropdown('actividad',$actividad, set_value('actividad'), $attributes);?>
                
                <span class="text-danger"><?php echo form_error('actividad'); ?></span>
            </div>
            </div>
            </div>
    
         <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="tipo_diente" class="control-label">Tipo Dental</label>
            </div>
            <div class="col-lg-8 col-sm-8">
            
                <?php
                $attributes = 'class = "form-control" id = "tipo_diente"';
                echo form_dropdown('tipo_diente',$tipo_diente, set_value('tipo_diente'), $attributes);?>
                
                <span class="text-danger"><?php echo form_error('tipo_diente'); ?></span>
            </div>
            </div>
            </div>

            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="zona_diente" class="control-label">Zona Dental</label>
            </div>
            <div class="col-lg-8 col-sm-8">
            
                <?php
                $attributes = 'class = "form-control" id = "zona_diente"';
                echo form_dropdown('zona_diente',$zona_diente, set_value('zona_diente'), $attributes);?>
                
                <span class="text-danger"><?php echo form_error('zona_diente'); ?></span>
            </div>
            </div>
            </div>

            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="act_trat_tipo" class="control-label">Tratamiento/Actividad</label>
            </div>
            <div class="col-lg-8 col-sm-8">
            
                <?php
                $attributes = 'class = "form-control" id = "zona_diente"';
                echo form_dropdown('act_trat_tipo',$act_trat_tipo, set_value('act_trat_tipo'), $attributes);?>
                
                <span class="text-danger"><?php echo form_error('act_trat_tipo'); ?></span>
            </div>
            </div>
            </div>
            
            
            
            <div class="form-group">
            <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
                <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
                <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancel" />
            </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>
      </article>
    </section>
  </body>
</html>
