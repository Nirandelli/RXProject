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
          <li><a href="{{ url('/admin/admin-welcome') }}"><i class="fa fa-home"></i>Inicio</a></li>
          <li class="active"><a href="{{ url('/admin/client') }}"><i class="fa fa-users"></i>Clientes</a></li>
          <li><a href="{{ url('/admin/employee') }}"><i class="fa fa-user"></i>Empleados</a></li>
          <li class="li-menu-nav">INVENTARIO</li>
          <li><a href="inventary/product.html"><i class="fa fa-pencil-square"></i>Inventario</a></li>
          <li class="li-menu-nav">COTIZACION</li>
          <li><a href="quotation/quotation.html"><i class="fa fa-book"></i>Cotizacion</a></li>
        </ul>
      </aside>
      <div class="container" id="container">
        <div class="location">
          <h1 class="title">Administrador</h1>
          <div class="breadcrumb">
            <ol>
              Se encuentra en
              <li><i class="fa fa-home"></i>Inicio</li>
              <li class="ol-active"><i class="fa fa-user-plus"></i>Agregar Clientes</li>
            </ol>
          </div>
        </div>
        <div class="for-container">
          <h2><i class="fa fa-user-plus"></i> Agregar Cliente</h2>
          <form class="container-add-clients">
            <div class="date-clients">
              <label for="namBbusiness">Nombre de la Empresa:</label>
              <input type="text" name="nameBusiness" value=""  placeholder="Nombre de la empresa">
              <label for="rfc">RFC:</label>
              <input type="text" name="rfc" value=""  placeholder="RFC">
            </div>
            <div class="date-clients">
              <label for="telephone">Telefono:</label>
              <input type="text" name="telephone" value=""  placeholder="Telefono">
              <label for="correo">E-mail:</label>
              <input type="text" name="correo" value=""  placeholder="Correo">
            </div>
            <div class="date-clients">
              <label for="adress">Direccion:</label>
              <textarea type="text" rows="6" name="adress"  placeholder="Direccion"></textarea>
            </div>
            <div class="button-client">
              <a href="#" class="btn-success"><i class="fa fa-save"></i> Guardar</a>
              <a href="{{ url('/admin/client') }}"  class="btn-danger"><i class="fa fa-times-rectangle-o"></i> Cancelar</a>
            </div>
          </form>
        </div>
      </div>
    </main>
    <footer id="footer">
      <h3>© 2017 Todos Los Derechos Reservados</h3>
    </footer>
    <script type="text/javascript" src="{{ url('js/menu-vertical.js') }}"></script>
  </body>
</html>
