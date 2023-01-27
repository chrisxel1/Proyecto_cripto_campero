
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ANALISIS DE CRIPTOMONEDAS</title>
    <link rel="icon" type="image/x-icon" href="assets/img/2.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="assets/css/material.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/loader.css">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

    

    
</head>
    <body>
        <header>
          <div class="contenedor_header">
              <ul class="flex-container">
                <li class="flex-item"></li>
                <li class="flex-item">
                  <p>
                    <strong>
                    ANÁLISIS DE CRIPTOMONEDAS
                    </strong>
                  </p>
                </li>
                <li class="flex-item"></li>
              </ul>
          </div>
        </header>

        <div id="demo-content">
          <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
          <div id="content"> </div>
        </div>
<div class="coin-price">
            <div class="logo"><img src="images/17.jpg"alt width="300" height="100" ></div>
            
  <div class="container">
        <div class="coin-price">
            <div class="logo"><img src="images/btc.png" ></div>
            <div>
                <h1>$<span id="bitcoin"></span></h1>
                <h1>Bitcoin</h1>
            </div>
        </div>
        <div class="coin-price">
            <div class="logo"><img src="images/eth.png" ></div>
            <div>
                <h1>$<span id="ethereum"></span></h1>
                <h1>Ethereum</h1>
            </div>
        </div>
       
        <div class="coin-price">
            <div class="logo"><img src="images/ada.png" ></div>
            <div>
                <h1>$<span id="cardano"></span></h1>
                <h1>Cardano</h1>
            </div>
        </div>
        <div class="coin-price">
            <div class="logo"><img src="images/dot.png" ></div>
            <div>
                <h1>$<span id="polkadot"></span></h1>
                <h1>Polkadot</h1>
            </div>
        </div>

    </div>
    <script src="app.js"></script>

        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center" style="padding:100px 0px;">
              <h3 class="text-center" style="color:#333; font-weight:900;">
                DATOS HISTORICOS
              </h3>
              <h3 style="color:#D90E1D !important; font-weight:bold;">
                BITCOIN
              </h3>
            </div>
          </div>
        </div>


      <section>
          <div class="container">
            <div class="row">
              
              <div class="col-md-12 text-center mt-5">
                <form action="DescargarReporte_x_fecha.php" method="post" accept-charset="utf-8">
                  <div class="row">
                    <div class="col">
                      <input type="date" name="fecha_ingreso" class="form-control"  placeholder="Fecha de Inicio" required>
                    </div>
                    <div class="col">
                      <input type="date" name="fechaFin" class="form-control" placeholder="Fecha Final" required>
                    </div>
                    <div class="col">
                      <span class="btn btn-dark mb-2" id="filtro">Filtrar</span>
                      <button type="submit" class="btn btn-danger mb-2">Descargar Reporte</button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col-md-12 text-center mt-5">     
                <span id="loaderFiltro">  </span>
              </div>
              
              
            <div class="table-responsive resultadoFiltro">
              <table class="table table-hover" id="tableEmpleados">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ABIERTO</th>
                    <th scope="col">ALTO</th>
                    <th scope="col">BAJO</th>
                    <th scope="col">CIERRE</th>
                    <th scope="col">FECHA DE INGRESO</th>
                  </tr>
                </thead>
              <?php
              include('config.php');
              $sqlTrabajadores = ('SELECT * FROM trabajadores ORDER BY fecha_ingreso ASC');
              $query = mysqli_query($con, $sqlTrabajadores);
              $i =1;
                while ($dataRow = mysqli_fetch_array($query)) { ?>
                <tbody>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $dataRow['nombre'] . ' '. $dataRow['apellido']; ?></td>
                    <td><?php echo $dataRow['email'] ; ?></td>
                    <td><?php echo $dataRow['telefono'] ; ?></td>
                    <td><?php echo '$ '. $dataRow['sueldo'] ; ?></td>
                    <td><?php echo $dataRow['fecha_ingreso'] ; ?></td>
                </tr>
                </tbody>
              <?php } ?>
              </table>
            </div>

            </div>
          </div>
      </section>



    <footer class="footer grey darken-4">
      <div class="container center" style="padding-top: 5px;">
        <div class="row justify-content-md-center">
          <div class="col col-lg-5">
          
          </div>
        </div>
      </div>
    </footer>



  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="assets/js/material.min.js"></script>
  <script>
  $(function() {
      setTimeout(function(){
        $('body').addClass('loaded');
      }, 1000);


//FILTRANDO REGISTROS
$("#filtro").on("click", function(e){ 
  e.preventDefault();
  
  loaderF(true);

  var f_ingreso = $('input[name=fecha_ingreso]').val();
  var f_fin = $('input[name=fechaFin]').val();
  console.log(f_ingreso + '' + f_fin);

  if(f_ingreso !="" && f_fin !=""){
    $.post("filtro.php", {f_ingreso, f_fin}, function (data) {
      $("#tableEmpleados").hide();
      $(".resultadoFiltro").html(data);
      loaderF(false);
    });  
  }else{
    $("#loaderFiltro").html('<p style="color:red;  font-weight:bold;">Debe seleccionar ambas fechas</p>');
  }
} );


function loaderF(statusLoader){
    console.log(statusLoader);
    if(statusLoader){
      $("#loaderFiltro").show();
      $("#loaderFiltro").html('<img class="img-fluid" src="assets/img/cargando.svg" style="left:50%; right: 50%; width:50px;">');
    }else{
      $("#loaderFiltro").hide();
    }
  }
});
</script>
<script src="app.js"></script>
</body>
</html>

