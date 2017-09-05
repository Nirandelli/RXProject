<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rayos X y Servicios Induxtriales</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
  </head>
  <body>
    <header>
      <nav class="nav">
        <ul class="ul-nav">
          <li onclick="menuVertical()"><i  class="fa fa-bars" aria-hidden="true"></i></li>
          <li>RAYOS X Y SERVICIOS INDUSTRIALES S.A. DE C.V.</li>
          <div class="sesion">
            <p>Jose de la cruz Acopa Martinez</p>
            <a href="#" class="btn-logout"><i class="fa fa-sign-out"></i> Cerrar Sesion</a>
          </div>
        </ul>
      </nav>
    </header>
    <main class="wrapper">
      <aside class="menu" id="aside">
        <div class="logo">
          <a href="{{ url('/admin/admin-welcome') }}"><img class="img-menu" src="{{ url('img/LogoRX.png')}}" alt=""></a>
        </div>
        <ul class="ul-menu">
          <li class="li-menu-nav">MENU DE NAVEGACION</li>
          <li class="active"><a href="{{ url('/admin/admin-welcome') }}"><i class="fa fa-home"></i>Inicio</a></li>
          <li><a href="{{ url('/admin/client') }}"><i class="fa fa-users"></i>Clientes</a></li>
          <li><a href="{{ url('/admin/employee') }}"><i class="fa fa-user"></i>Empleados</a></li>
          <li class="li-menu-nav">INVENTARIO</li>
          <li class="i"><a href="{{url('admin/inventaryMenu')}}"><i class="fa fa-pencil-square"></i>Inventario</a></li>
          <ul class="u">
            <li><a href="#">Productos</a></li>
            <li><a href="#">Salidas</a></li>
            <li><a href="#">Reportes</a></li>
          </ul>
          <li class="li-menu-nav">COTIZACION</li>
          <li><a href="{{url('admin/quotation')}}"><i class="fa fa-book"></i>Cotizacion</a></li>
        </ul>
      </aside>
      <div class="container" id="container">
        <div class="location">
          <h1 class="title">Administrador</h1>
          <div class="breadcrumb">
            <ol>
              Se encuentra en
              <li class="ol-active"><i class="fa fa-home"></i>Inicio</li>
            </ol>
          </div>
        </div>
        <div class="eslogan">
          <h1>RX EL EQUIPO QUE SE MUEVE A DONDE TU LO NECESITES!</h1>
        </div>
        <div class="businessComplet">
          <img src="{{ url('img/3.jpg')}}" alt="">
          <!-- <div class="businessBody">
            <div class="business">
              <h2>Misión</h2>
              <p>Generar servicios, transformar y comercializar  en forma eficiente el Servicio de Inspección No Destructiva,
    						 así como nuestros productos a la Industria Nacional, fomentando la diversificación productiva que propicie
    						 un valor agregado a cada uno de nuestros Clientes, siendo promotores de la tecnología de punta y apuntalando
    						 la economía tanto del Estado como del País.</p>
            </div>
            <div class="business">
              <h2>Visión</h2>
              <p>Posicionar a Rayos X y Servicios Industriales S.A. de C.V. como empresa líder en la aplicación de
    								Ensayos No Destructivos y soluciones vía el suministro a las instalaciones petroleras y de la
    								iniciativa privada en la República Mexicana, proporcionando el servicio requerido, dentro de las
    								normas de calidad y seguridad que  satisfagan a todos nuestros Clientes.</p>
            </div>

          </div>
          <div class="businessImg">
            <img src="{{ url('img/MV1.jpg')}}" alt="">
          </div> -->

        </div>

        </div>
      </div>
    </main>
    <footer id="footerM">
      <h3>© 2017 Todos Los Derechos Reservados</h3>
    </footer>
    <script type="text/javascript" src="{{ url('js/menu-vertical.js') }}"></script>
  </body>
</html>
