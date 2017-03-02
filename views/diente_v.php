
<article id="art2">
  
    <?php 
        $attributes = array("class" => "form-horizontal", "id" => "Odonto_V_Cform", "name" => "Odonto_V_Cform");
        echo form_open("Odonto_V_C/Diente_V", $attributes);?>
        <?php
//<form action=\"odontodiagrama.php?d=".$_GET["d"]."\" method=\"post\">
        try {
            echo "<h2>DIENTE #".$R."</h2>";
            echo "<img src=\"../images/odontodiagrama_ex.png\" alt=\"\">";
            echo "
            <form action=\"odontodiagrama.php?d=".$diente."\" method=\"post\">
            <select  name=\"a\">
            <option value=\"N/A\">V</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              <option value=\"Extracción\">Extracción</option>
              <option value=\"Pulpotomia\">Pulpotomia</option>
              <option value=\"Borrar\">-- Borrar --</option>
            </select>
            <br>

            <select  name=\"b\">
            <option value=\"N/A\">M/D</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              <option value=\"Extracción\">Extracción</option>
              <option value=\"Pulpotomia\">Pulpotomia</option>
              <option value=\"Borrar\">-- Borrar --</option>
            </select>
            <br>

            <select  name=\"c\">
            <option value=\"N/A\">P</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              <option value=\"Extracción\">Extracción</option>
              <option value=\"Pulpotomia\">Pulpotomia</option>
              <option value=\"Borrar\">-- Borrar --</option>
            </select>
            <br>

            <select  name=\"d\">
            <option value=\"N/A\">D/M</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              <option value=\"Extracción\">Extracción</option>
              <option value=\"Pulpotomia\">Pulpotomia</option>
              <option value=\"Borrar\">-- Borrar --</option>
            </select>
            <br>

            <select  name=\"e\">
            <option value=\"N/A\">O/I</option>
              <option value=\"Cariada\">Cariada</option>
              <option value=\"Restaurada\">Restaurada</option>
              <option value=\"Extracción\">Extracción</option>
              <option value=\"Pulpotomia\">Pulpotomia</option>
              <option value=\"Borrar\">-- Borrar --</option>
            </select>

            <br>
                        <input type=\"submit\" value=\"Establecer estado\">
                        </form>";

            echo "<A id='aa' HREF=\"odontodiagrama.php\"> - CERRAR - </A>";


        } catch (Exception $e) {
        }


        ?>

      </article>

    </section>


  </body>
  </html>