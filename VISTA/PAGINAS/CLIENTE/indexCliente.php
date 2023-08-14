<?php
session_start();
if(isset($_SESSION['usuarioValido']))
{
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <link rel="stylesheet" href="../../CSS/styleindex.css">
  <link rel="stylesheet" href="../../CSS/stylemen.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <script src="../../vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.js"></script>

</head>

<body>
  <!--Encabezado-->
  <div id="contenedor">
    <header class="container-fluid bg-black text-white text-center pt-3">
      <div class="row">
        <div class="col-sm-2">MARKET 3TIENVD-G1 </div>


        <div class="col-sm-6">
          <div id="frmBusqueda">
            <form action="">
              <div class="input-group mb-3">

                <div class="col-sm-2">
                  <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle"
                      data-bs-toggle="dropdown">CATEGORIAS</button>
                    <ul class="dropdown-menu">

                      <a class="dropdown-item" href="../../PAGINAS/Juguetes.html" target="iframeContenido">Jugetes</a>
                      <a class="dropdown-item" href="../../PAGINAS/Electronica.html" target="iframeContenido">Electronica</a>
                      <a class="dropdown-item" href="../../PAGINAS/Ropa.html" target="iframeContenido">Ropa</a>

                    </ul>
                  </div>
                </div>

                <input type="text" class="form-control" placeholder="      Buscar en MARKET 3TIENVD-G1...">
                <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path
                      d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                  </svg>
                </button>
              </div>
            </form>
          </div>
        </div>


        <div class="col-sm-2">
          <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">CARRITO<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
            </svg></button>
            <ul class="dropdown-menu">
              <a class="dropdown-item" href="#" target="iframeContenido">Ver Catalogo</a>
              <a class="dropdown-item" href="#" target="iframeContenido">Agregar al Carrito</a>

            </ul>
          </div>
        </div>

        <div class="col-sm-2">
          <div class="dropdown">

          <?php
            echo 'Hola'.$_SESSION['usuarioValido'];
          ?>

            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">CUENTA<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
              <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
            </svg></button>
            <ul class="dropdown-menu">
              <a class="dropdown-item" href="" target="iframeContenido">Editar Cuenta</a>
              <a class="dropdown-item" href="../../../CONTROLADOR/CerraSesion.php" target="_blank">Salir</a>

            </ul>
          </div>
        </div>

      </div>
    </header>


    <!--Menu-->
    <nav id="Menu">
      <ul>
        <li class="active">

          <!-- Offcanvas Sidebar -->
          <div class="offcanvas offcanvas-start" id="demo">
            <div class="offcanvas-header">
              <h1 class="offcanvas-title">OPCIONES</h1>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
              <p>LOS MEJORES DECUENTOS</p>
              <p>PRODUCTOS MAS VENDIDOS</p>
              <p>MAS PRODUCTOS DISPONIBLES</p>
              <button class="btn btn-secondary" type="button">MAS ARTICULOS...</button>
            </div>
          </div>

          <!-- Button to open the offcanvas sidebar -->
          <a id="todo" type="button" target="iframeContenido" data-bs-toggle="offcanvas" data-bs-target="#demo">Todo</a>
        </li>

        <li><a href="../../PAGINAS/inicioo.html" target="iframeContenido"> Inicio</a></li>
        <li><a href="../../PAGINAS/productos.html" target="iframeContenido"> Productos </a></li>
        <li> <a href="../../PAGINAS/perfil.html" target="iframeContenido"> Perfil </a></li>

        <li class="active">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Ayuda</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Atencion a cliente</a></li>
            <li><a class="dropdown-item" href="#">Configuraciones</a></li>
            <li><a class="dropdown-item" href="#">Acerca de</a></li>

          </ul>
        </li>
      </ul>

    </nav>



    <!--contenido de la pagina -->
    <section id="Contenido">

      <iframe src="../../PAGINAS/inicioo.html" frameborder="0" name="iframeContenido" width="100%" height="800px"></iframe>

    </section>



    <!--Pie de pagina  -->
    <div style=" text-align:center;">
      <footer id="PiePagina">
        <p>Aqui va el pie de pagina</p>
      </footer>
    </div>
  </div>
</body>

</html>
<?php
}//fin del if
else
    echo'Debes de iniciar sesion';
    echo'<a href="../InicioSesion.html">
    Iniciar Sesion
    </a>';
    
?>