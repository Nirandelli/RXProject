<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rayos X y Servicios Induxtriales</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/datatable/dataTables.bootstrap.css') }}">
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
          <li><a href="{{url('admin/quotation')}}"><i class="fa fa-book"></i>Cotizacion</a></li>
        </ul>
      </aside>
      <div class="container" id="container">
        <div class="location">
          <h1 class="title">Administrador</h1>
          <div class="breadcrumb">
            <ol>
              Se encuentra en
              <li><i class="fa fa-home"></i>Inicio</li>
              <li class="ol-active"><i class="fa fa-users"></i>Clientes</li>
            </ol>
          </div>
        </div>
        <div class="table-container">
          <div class="container-search">
            <a href="{{ url('/admin/add-client') }}" class="btn-success" ><i class="fa fa-user-plus"></i> Registrar Cliente</a>
          </div>
          <div class="">
            <table id="Jtabla">
              <thead>
                <tr class="theader">
                  <th>Acciones</th>
                  <th>RFC</th>
                  <th>Nombre de la Empresa</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Correo</th>
               </tr>
              </thead>
              <tbody class="tbodymain">
                <tr class="tbody">
                  <td>
                    <div class="action">
                      <a href="{{ url('/admin/edit-client') }}"><i class="fa fa-pencil-square-o fa-lg"></i></a>
                      <a href="#" alt="Eliminar"><i class="fa fa-trash-o fa-lg"></i></a>
                    </div>
                  </td>
                  <td>PACR720402U71</td>
                  <td>Servicios Electricos Automotriz Patricio</td>
                  <td>Rancheria Guineo Primera seccion carretera a reforma kilometro 11.5</td>
                  <td>9932065554</td>
                  <td>delli.patricio.mayo@gmail.com</td>
                </tr>
                <tr class="tbody">
                  <td>
                    <div class="action">
                      <a href="{{ url('/admin/edit-client') }}"><i class="fa fa-pencil-square-o fa-lg"></i></a>
                      <a href="#" alt="Eliminar"><i class="fa fa-trash-o fa-lg"></i></a>
                    </div>
                  </td>
                  <td>PACR720402U71</td>
                  <td>Servicios Electricos Automotriz Patricio</td>
                  <td>Rancheria Guineo Primera seccion carretera a reforma kilometro 11.5</td>
                  <td>9934298955</td>
                  <td>jose.acopa.martinez@gmail.com</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
    <footer id="footer">
      <h3>© 2017 Todos Los Derechos Reservados</h3>
    </footer>
    <script type="text/javascript" src="{{ url('js/menu-vertical.js') }}"></script>
    <script src="{{ url('js/datatable/jQuery-2.1.3.min.js') }}"></script>
    <script src="{{ url('js/datatable/jquery.dataTables.js') }}" type="text/javascript"></script>
    <script src="{{ url('js/datatable/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $('#Jtabla').dataTable({
          "bPaginate": true,
          "bLengthChange": true,
          "bFilter": true,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": true
        });
      });
    </script>
  </body>
</html>
