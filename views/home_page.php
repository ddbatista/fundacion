<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="https://www.fundacionsdivinoninojesus.com/logo-fundacion.png"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fundación Divino Niño</title>
    <link href="https://www.fundacionsdivinoninojesus.com/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://www.fundacionsdivinoninojesus.com/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://www.fundacionsdivinoninojesus.com/css/animate.min.css" rel="stylesheet">
  <link href="https://www.fundacionsdivinoninojesus.com/css/custom.css" rel="stylesheet">
  <link href="https://www.fundacionsdivinoninojesus.com/css/icheck/flat/green.css" rel="stylesheet">
  <script src="https://www.fundacionsdivinoninojesus.com/js/jquery.min.js"></script>
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
        background: white;

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
        font-weight: bold;
        color: #808da1;
        font-size: 10pt;
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
    width: 50%;
    }

      th, td {
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
    background-color: #4CAF50;
    color: white;
    }
    #Seg{
        font-family: cursive;
        font-weight: bold;
        color: #00112C;
        font-size: 18pt;
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
    <!-- HTML5 shim and Respond  .js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="httpss://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="httpss://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
    <section id="cabecera">
              <article id="logo">
                <img src="https://www.fundacionsdivinoninojesus.com/logo-fundacion.png" alt="logo" id="logo_img"/>
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
              <!--<article id="menu">
              <ul>
              <li>
                <div id="dropdown">
                <button id="dropbtn">Registros</button>
                <div id="dropdown-content">
                   <a href="https://www.fundacionsdivinoninojesus.com/Register">Registro Pacientes</a>
                   <a href="https://[::1]/fundacion/index.php/Register_Voluntario">Registro Voluntariado</a>
                   <a href="https://[::1]/fundacion/index.php/Register_Localidad">Registro Localidad</a>
                </div>
                </div>
                </li>
                <li>
                <div id="dropdown">
                <button id="dropbtn">Odontodiagramas</button>
                <div id="dropdown-content">
                   <a href="https://[::1]/fundacion/index.php/Odontodiagrama_C">Nuevo</a>
                   <a href="https://[::1]/fundacion/index.php/Odontodiagrama_C/Historial_zona">Historial Zona</a>
                   <a href="https://[::1]/fundacion/index.php/Odontodiagrama_C/Historial_paciente">Historial Paciente</a>
                </div>
                </div>
                </li>
                <li><a href="https://[::1]/fundacion/index.php/login/Logout">Cerrar Sesión</a></li> 
                  </ul>
              </article>-->
    </section>

    <section id="cuerpo">
      <article id="art1">
        <?php
        echo "<br><br>";
        echo "
        <article id=\"Seg\">
            Fundación Solidaria Divino Niño Jesús
        </article>";
        echo "<br><br>";
        ?>
        
        <div class="row">
            <div class="col-md-14 col-sm-14 col-xs-14">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Actividades</h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div id="mainb2" style="height:350px;"></div>
            
                </div>
              </div>
            </div> 
<!--
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Donut Graph</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div id="echart_donut" style="height:350px;"></div>

                </div>
              </div>
            </div>
            <table>
            -->
        <?php
        echo "
        <br><br><br>
        <article id=\"Seg\">
        Top 10 Doctores
        </article>
        <br><br>
        <table>
          <tr>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Actividades</th>
          </tr>
          
        ";
         for ($i=0; $i < $Doctores_Top_Count; $i++) { 
          echo "<tr>";
          
          for ($j=0; $j < 3 ; $j++) { 
            # code...
            echo "<td>". $Doctores_Top[$i][$j]."</td>";
            //echo $Doctores_Top[$i][$j];
            
          }
           echo "</tr>";
          
        }
        echo "</table>";


        ?>

   <!--<tr>
     <th>Firstname</th>
     <th>Lastname</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
  </tr>
  <tr>
    <td>Cleveland</td>
    <td>Brown</td>
    <td>$250</td>
</tr>
</table>-->


            
            
            

      </article>
    </section>

    <script src="https://www.fundacionsdivinoninojesus.com/js/bootstrap.min.js"></script>
  <script src="https://www.fundacionsdivinoninojesus.com/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="https://www.fundacionsdivinoninojesus.com/js/icheck/icheck.min.js"></script>
  <script src="https://www.fundacionsdivinoninojesus.com/fundacion/js/custom.js"></script>

  <!-- echart -->
  <script src="https://www.fundacionsdivinoninojesus.com/js/echart/echarts-all.js"></script>
  <script src="https://www.fundacionsdivinoninojesus.com/js/echart/green.js"></script>

  <script>

var arrCaries = <?php echo json_encode( $Caries_Mes ) ?>;
var arrSanos = <?php echo json_encode( $Sanos_Mes ) ?>;
var arrOcturados = <?php echo json_encode( $Octurados_Mes ) ?>;
var arrRestaurados = <?php echo json_encode( $Restaurados_Mes ) ?>;
var Caries_data = function(x) {
  
  return arrCaries[x];
};

var Sanos_data = function(x) {
  return arrSanos[x];
};

var Octurados_data = function(x) {
  return arrOcturados[x];
};

var Restaurados_data = function(x) {
  return arrRestaurados[x];
};

var myChart9 = echarts.init(document.getElementById('mainb2'), theme);
    myChart9.setOption({
      title: {
       // text: 'Graph title',
        //subtext: 'Graph Sub-text'
      },
      theme : theme,
      tooltip: {
        trigger: 'axis'
      },
      legend: {
        data: ['Cariados', 'Restaurados', 'Sanos','Octurados']
      },
      toolbox: {
        show: false
      },
      calculable: false,
      xAxis: [{
        type: 'category',
       data: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
        
      }],
      
      yAxis: [{
        type: 'value'
      }],
      series: [{
        name: 'Cariados',
        type: 'bar',
        data: [Caries_data(1),Caries_data(2),Caries_data(3),Caries_data(4),Caries_data(5),Caries_data(6),Caries_data(7),Caries_data(8),Caries_data(9),Caries_data(10),Caries_data(11),Caries_data(12)],
        
        markPoint: {
          data: [{
            type: 'max',
            name: '???'
          }, {
            type: 'min',
            name: '???'
          }]
        },
        markLine: {
          data: [{
            type: 'average',
            name: '???'
          }]
        }
      }, {
        name: 'Restaurados',
        type: 'bar',
        
        data: [Restaurados_data(1), Restaurados_data(2), Restaurados_data(3),Restaurados_data(4), Restaurados_data(5), Restaurados_data(6), Restaurados_data(7), Restaurados_data(8), Restaurados_data(9), Restaurados_data(10), Restaurados_data(11), Restaurados_data(12)],
        markPoint: {
          data: [{
            
           type: 'max',

          }, {
            type: 'min',
           
          }]
        },
        markLine: {
          data: [{
            type: 'average',
            name: '???'
          }]
        }
      }, {
        name: 'Sanos',
        type: 'bar',
        
        data: [Sanos_data(1), Sanos_data(2), Sanos_data(3),Sanos_data(4), Sanos_data(5), Sanos_data(6), Sanos_data(7), Sanos_data(8), Sanos_data(9), Sanos_data(10), Sanos_data(11), Sanos_data(12)],
        markPoint: {
          data: [{
            
           type: 'max',

          }, {
            type: 'min',
           
          }]
        },
        markLine: {
          data: [{
            type: 'average',
            name: '???'
          }]
        }
      }, {
        name: 'Octurados',
        type: 'bar',
        data: [Octurados_data(1), Octurados_data(2), Octurados_data(3),Octurados_data(4), Octurados_data(5), Octurados_data(6), Octurados_data(7), Octurados_data(8), Octurados_data(9), Octurados_data(10), Octurados_data(11), Octurados_data(12)],
        markPoint: {
          data: [{
            type: 'max',

          }, {
            type: 'min',
           }]
        },
        markLine: {
          data: [{
            type: 'average',
            name: '???'
          }]
        }
      }]
    });
    var arrDocTop = <?php echo json_encode( $Doctores_Top ) ?>;

      
    var Top_Doctores = function() {
      var x;
      
       for (var i = 0; i < arrDocTop.length; i++) {
         x= arrDocTop[i];

       }
       return x;
       
    };
    //Top_Doctores(1);
     // Doughnut chart
     var myChart = echarts.init(document.getElementById('echart_donut'), theme);
    myChart.setOption({
      tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
      },
      calculable: true,

      /*legend: {
        //orient: 'vertical',
        //x: 'left',
        x: 'center',
        y: 'bottom',
        //data: ['Direct Accesss', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
       data: [Top_Doctores()]//,Top_Doctores(2),Top_Doctores(3),Top_Doctores(4),Top_Doctores(5),Top_Doctores(6),Top_Doctores(7),Top_Doctores(8),Top_Doctores(9)]
       
      },*/
      toolbox: {
        show: true,
        feature: {
          magicType: {
            show: true,
            type: ['pie', 'funnel'],
            option: {
              funnel: {
                x: '25%',
                width: '50%',
                funnelAlign: 'center',
                max: 1548
              }
            }
          },
          restore: {
            show: true
          },
          saveAsImage: {
            show: true
          }
        }
      },
      series: [{
        name: 'Access to the resource',
        type: 'pie',
        radius: ['35%', '55%'],
        itemStyle: {
          normal: {
            label: {
              show: true
            },
            labelLine: {
              show: true
            }
          },
          emphasis: {
            label: {
              show: true,
              position: 'center',
              textStyle: {
                fontSize: '14',
                fontWeight: 'normal'
              }
            }
          }
        },
        data: [{
          value: 335,
          name: Top_Doctores()
        }, {
          value: 310,
          name: 'E-mail Marketing'
        }, {
          value: 234,
          name: 'Union Ad'
        }, {
          value: 135,
          name: 'Video Ads'
        }, {
          value: 1548,
          name: 'Search Engine'
        }]
      }]
    });
     
    

  
  </script>
  </body>
</html>
