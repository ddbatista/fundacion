<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html >
<html lang="en">
  <head>
  <link rel="shortcut icon" href="https://www.fundacionsdivinoninojesus.com/logo-fundacion.png"/>
    <meta charset="utf-8">
    <title>Fundación Divino Niño</title>
    <style>

      body{
        margin: 0px auto;
        background-image: url("https://www.fundacionsdivinoninojesus.com/backgroud.png");
      }

      #cont{
        text-align: center;
      }

      #klk{
        border-radius: 10px 10px 10px 10px;
        display: inline-block;
        width: 400px;
        min-width: 350px;
        background: white;
      }

      input ,select {
          color: #7d7d7d;
          font-size: 12pt;
          width:200px;
          padding: 6px 10px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #eeeeee;
          border-radius: 6px;
          background: #f9f9f9;
      }

      input[type=submit] {
          width: 150px;
          background-color: #5f7594;
          color: white;
          padding: 5px 8px;
          margin: 8px 0;
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


   <section id="cont">
      <br>

      <article id="klk">
        <br>
        <img src="https://www.fundacionsdivinoninojesus.com/logo-fundacion.png" alt="logo" id="logo_img"/>
        <br>
          <br>
            <br>

          <div class="col-lg-4 col-sm-4 well">
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login", $attributes);?>
          
               
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                   <!-- <label for="txt_username" class="control-label">Username</label> -->
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input type="text"  name="txt_username" autocomplete = "off" placeholder=" Cuenta" value="<?php echo set_value('txt_username'); ?>"><br>
                    
                    <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
               </div>
               </div>
               </div>
               
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
               <!--<label for="txt_password" class="control-label">Password</label> -->
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input type="password"  name="txt_password" placeholder=" Password" value="<?php echo set_value('txt_password'); ?>" ><br>
                    
                    <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
               </div>
               </div>
               </div>
                              
               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Identificarse" />
                    
                    
               </div>
               </div>
         
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
    
           <!-- <form >
              <label for="txt_username" class="control-label">Cuenta</label>
              <input type="text"  name="txt_username" placeholder=" Cuenta"><br>
              <label for="txt_password" class="control-label">Password</label>
              <input type="password"  name="txt_password" placeholder=" Password"><br>
              <br>
               <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Identificarse" /> -->
            <!--<input name="btn_login" type="submit" value="Identificarse">-->
            </form>
          <br><br>
      </article>
     <!-- </div>
      </div>
      </div> -->
   </section> 
  </body>
</html>
