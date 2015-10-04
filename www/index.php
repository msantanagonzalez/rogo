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
  	<title>Rogo |- Ask and respond </title>
  </head>

  <!-- Principio del Cuerpo de la pagina-->
  <body class="bodyNoise">
    <div class="container-fluid">
     <div class="row">

        <!--  Inicio Barra de herramientas,Carrusel y login -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 headContainer headerNoise">

          <!-- BUSCAR,LOGO Y BARRA DE HERRAMIENTAS -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">

              <!-- LOGO -->
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center visible-sm visible-xs">
                <img src="Resources/images/logo1.png" alt="...">
              </div>
              <!-- Fin Logo-->

              <!-- BUSCAR -->
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Buscar</button>
                  </span>
                </div>
              </div>
              <!-- Fin Buscar-->

              <!-- USUARIO -->
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 indexIconsContainer">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 singleIconContainer">
                    <span class="glyphicon glyphicon-user lightBlue" aria-hidden="true"></span>
                    <span>Username</span>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 singleIconContainer">
                    <span class="glyphicon glyphicon-cog lightBlue" aria-hidden="true"></span>
                    <span>Configuracion</span>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 singleIconContainer">
                    <span class="glyphicon glyphicon-off lightBlue" aria-hidden="true"></span>
                    <span>Logout</span>
                  </div>
                </div>
              </div>
              <!-- Fin Usuario-->

              <!-- LOGO -->
              <div class="indexCircle visible-lg visible-md">
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 indexLogoContainer text-right visible-lg visible-md">
                <img src="Resources/images/logo1.png" alt="...">
              </div>
              <!-- Fin Logo-->

            </div>
          </div>
          <!-- Fin Barra de herramientas y logo-->

          <!-- REGISTRO + CAROUSEL -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
              <!-- LOGIN/REGISTRO -->
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 registroContainer">
                      REGISTRO
                      <br>
                      <br>
                      <form class="form-horizontal">
                        <div class="form-group">
                          <div class="col-lg-8 col-lg-offset-2">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Nombre">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-8 col-lg-offset-2">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-8 col-lg-offset-2">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Alias">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-8 col-lg-offset-2">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-8 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 registroContainer">
                      LOGIN
                      <br>
                      <br>
                      <form class="form-horizontal">
                        <div class="form-group">
                          <div class="col-lg-8 col-lg-offset-2">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Usuario">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-8 col-lg-offset-2">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-8 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
              <!-- CAROUSEL -->
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 carouselContainer">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="carouselImageContainer" src="Resources/images/carouselProgramacion.png" alt="...">
                      <div class="carousel-caption">
                        <h1>Programacion</h1>
                        <p>Centrar elemento en un div?</p>
                        <a class="btn btn-lg btnCarousel" href="#news1" role="button">Responder &raquo;</a>
                      </div>
                    </div>

                    <div class="item">
                      <img class="carouselImageContainer" src="Resources/images/carouselCiencia.png" alt="...">
                      <div class="carousel-caption">
                        <h1>Ciencia</h1>
                        <p>Pregunta2</p>
                        <a class="btn btn-lg btnCarousel" href="#news1" role="button">Responder &raquo;</a>
                      </div>
                    </div>

                    <div class="item">
                      <img class="carouselImageContainer" src="Resources/images/carouselDeporte.png" alt="...">
                      <div class="carousel-caption">
                        <h1>Deporte</h1>
                        <p>Pregunta3</p>
                        <a class="btn btn-lg btnCarousel" href="#news1" role="button">Responder &raquo;</a>
                      </div>
                    </div>

                    <div class="item">
                      <img class="carouselImageContainer" src="Resources/images/carouselArte.png" alt="...">
                      <div class="carousel-caption">
                        <h1>Arte</h1>
                        <p>Pregunta4</p>
                        <a class="btn btn-lg btnCarousel" href="#news1" role="button">Responder &raquo;</a>
                      </div>
                    </div>

                    <div class="item">
                      <img class="carouselImageContainer" src="Resources/images/carouselTecnologia.png" alt="...">
                      <div class="carousel-caption">
                        <h1>Tecnologia</h1>
                        <p>Pregunta5</p>
                        <a class="btn btn-lg btnCarousel" href="#news1" role="button">Responder &raquo;</a>
                      </div>
                    </div>

                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left lightBlue" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right lightBlue" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- Fin Barra de herramientas,Carrusel y login-->

        <!-- SEPARADOR -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 separator">
        </div>
        <!-- Fin Separador-->

        <!-- CONTENIDO -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <!-- Principio Ordenacion Categoria -->
          <div class="IndexCategoria col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <a href="ciencia.php" class="list-group-item ">Ciencia</a>
            <a href="tecnologia.php" class="list-group-item ">Tecnologia</a>
            <a href="deporte.php" class="list-group-item ">Deporte</a>
            <a href="arte.php" class="list-group-item ">Arte</a>
            <a href="programacion.php" class="list-group-item ">Programacion</a>
          </div>
          <!-- Fin Ordenacion Categoria -->

          <!-- Principio Historial -->
          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
          <BR>
          <BR>
          <BR>
          <BR>
            <BR>
            <BR>
            <BR>
            <BR>
              <BR>
              <BR>
              <BR>
              <BR>
                <BR>
                <BR>
                <BR>
                <BR>
                  <BR>
                  <BR>
                  <BR>
                  <BR>
                    <BR>
                    <BR>
                    <BR>
                    <BR>
                      <BR>
                      <BR>
                      <BR>
                      <BR>
            </div>
            <!-- Fin Historial -->
        </div>
        <!-- Fin del Cuerpo de la pagina-->
      </div>
    </div>
  </body>
  <!-- Principio del Cuerpo de la pagina-->

  <!-- jQuery -->
      <script src="Resources/js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="Resources/js/bootstrap.min.js"></script>

      <!-- Plugin JavaScript -->
      <script src="Resources/js/jquery.easing.min.js"></script>

      <!-- One -->
      <script src="Resources/js/bootstrap.min.one.js"></script>
</html>
