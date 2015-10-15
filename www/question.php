<!doctype html>
<html lang="en">
  <head>
  	<!-- Author -->
  	<meta name="author" content="Marco Santana & Dario Mendez">
  	<!-- Charset html4 -->
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  	<!-- Charset html5 -->
  	<meta charset="UTF-8">
    <!-- mobile-optimized -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">  Allow zoom on mobile device -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" /> <!-- Doesn't allow zoom on mobile devicess -->
  	<!-- For IE(Crazy users) -->
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<!-- CSS(Bootstrap) -->
  	<link href="Resources/css/bootstrap.css" rel="stylesheet">
    <!-- CSS(Ours) -->
    <link href="Resources/css/styles.css" rel="stylesheet">
    <link href="Resources/css/customFonts.css" rel="stylesheet">

  	<title>Rogo |- Ask and respond </title>
  </head>

  <!-- Principio del Cuerpo de la pagina-->
  <body class="bodyNoise">
    <div class="container-fluid">

      <div class="row">
        <!-- Barra Usuario -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 headContainer headerNoise">

          <!-- BUSCAR + LOGO -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">

              <!-- LOGO -->
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center visible-sm visible-xs">
                <img src="Resources/images/logo1.png" alt="...">
              </div>
              <!-- Fin Logo-->

              <!-- BUSCAR -->
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 buscarContainer">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Buscar</button>
                  </span>
                </div>
              </div>
              <!-- Fin Buscar-->

              <!-- USUARIO -->
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 iconsContainer">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 singleIconContainer">
                    <span class="glyphicon glyphicon-user textBlue" aria-hidden="true"></span>
                    <a href="user.php"><span >Username</span></a>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 singleIconContainer">
                    <span class="glyphicon glyphicon-cog textBlue" aria-hidden="true"></span>
                    <a href="configuracion.php"><span>Configuracion</span></a>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 singleIconContainer">
                    <span class="glyphicon glyphicon-off textBlue" aria-hidden="true"></span>
                    <span>Logout</span>
                  </div>
                </div>
              </div>
              <!-- Fin Usuario-->

              <!-- LOGO Y CIRCULO-->
              <div class="circle visible-lg visible-md">
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 logoContainer text-center visible-lg visible-md">
                <img src="Resources/images/logo1.png" alt="..." class="logo">
              </div>
              <!-- Fin logo y circulo-->
            </div>
          </div>


        </div>
        <!-- Fin Barra Usuario-->
        <!-- Categoria -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoriaContainer">
              <img id="imagenProgramacion" src="Resources/images/carouselProgramacion.png" class="imagenCategoria">
              <p class="textoCategoria text-center">Programacion &nbsp;</p>
            </div>
          </div>
        </div>
        <!-- Fin Categoria -->
        <!-- Separador -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 separator">
        </div>
        <!-- Fin Separador -->
        <!-- CONTENIDO -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
              <!-- Izquierda -->
              <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                  <!-- Pregunta -->
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 preguntaContainer pull-right">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p> Centrar elementos en un div? </p>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                        <span class="glyphicon glyphicon-user iconosPregunta"></span>
                        <span> Username </span>
                        <span class="glyphicon glyphicon-question-sign"></span>
                      </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p> PREGUNTA AQUI </p>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right iconosMovil">
                        <p> Face </p>
                        <p> Puntos </p>
                        <p> Caca </p>
                      </div>
                    </div>

                  </div>
                  <!-- Fin Pregunta -->
                  <!-- Mejor respuesta -->
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenidoContainer">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mejorRespuestaContainer pull-right">
                      dasd
                    </div>
                  </div>
                  <!-- Fin Mejor respuesta -->
                  <!-- respuestas -->
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenidoContainer">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 respuestasContainer pull-right">
                      dasd
                    </div>
                  </div>
                  <!-- Fin respuestas -->
              </div>
              <!-- Fin izquierda -->
              <!-- Derecha -->
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-center">
                <p class="texthtGray">algo</p>
              </div>
              <!-- Fin Derecha -->
            </div>
        </div>
        <!-- Fin Contenido-->

      </div>
    </div>
  </body>
  <!-- Fin del Cuerpo de la pagina-->

  <!-- jQuery -->
      <script src="Resources/js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="Resources/js/bootstrap.min.js"></script>

      <!-- Plugin JavaScript -->
      <script src="Resources/js/jquery.easing.min.js"></script>

      <!-- One -->
      <script src="Resources/js/bootstrap.min.one.js"></script>
</html>
