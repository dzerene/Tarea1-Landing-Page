<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello word </title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="PGb5hxeG7LZG2Nd5KQEi9TUOTw7FecOe7QZGsNvU">
  
  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../img/logo.png" alt="SoftPatagonia Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">SoftPatagonia</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-5 d-flex">
          <div class="image">
            <img src="../img/perfil.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Francisco Valdes</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <li class="nav-item">
              <a href="http://127.0.0.1:8000/post/create" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Create post
                </p>
              </a>
            </li>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <!--USER Y LOG OUT-->
                                <li class="nav-item ">
                      <a class="nav-link " href="http://127.0.0.1:8000/logout"  
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                          <div class="image">
                            <img src="../img/logout.png" class="img-circle elevation-2" alt="User Image">
                        </div>
                          Logout
                      </a>
                          <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" class="d-none">
                              <input type="hidden" name="_token" value="PGb5hxeG7LZG2Nd5KQEi9TUOTw7FecOe7QZGsNvU">                          </form>
                  </li>
                          </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabla de documentos </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Documentos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
              <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
            
                <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Información de los documentos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>ID</th>
                              <th>FECHA</th>
                              <th>NOMBRE</th>
                              <th>ESTADO</th>
                              <th>ACCION</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>25/05/2021
                              </td>
                              <td>documento1</td>
                              <td>En revision</td>
                              <td> 
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-success active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Aprobar
                                  </label>
                                  <label class="btn btn-warning">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Revisar
                                  </label>
                                  <label class="btn btn-danger">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Rechazar
                                  </label>
                                </div>
                              </td>

                            </tr>
                            </body>

                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>25/05/2021
                              </td>
                              <td>documento1</td>
                              <td>En revision</td>
                              <td> 
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-success active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Aprobar
                                  </label>
                                  <label class="btn btn-warning">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Revisar
                                  </label>
                                  <label class="btn btn-danger">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Rechazar
                                  </label>
                                </div>
                              </td>

                            </tr>
                            </body>

                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>25/05/2021
                              </td>
                              <td>documento1</td>
                              <td>En revision</td>
                              <td> 
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-success active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Aprobar
                                  </label>
                                  <label class="btn btn-warning">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Revisar
                                  </label>
                                  <label class="btn btn-danger">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Rechazar
                                  </label>
                                </div>
                              </td>

                            </tr>
                            </body>

                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>25/05/2021
                              </td>
                              <td>documento1</td>
                              <td>En revision</td>
                              <td> 
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-success active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Aprobar
                                  </label>
                                  <label class="btn btn-warning">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Revisar
                                  </label>
                                  <label class="btn btn-danger">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Rechazar
                                  </label>
                                </div>
                              </td>

                            </tr>
                            </body>

                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>25/05/2021
                              </td>
                              <td>documento1</td>
                              <td>En revision</td>
                              <td> 
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-success active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Aprobar
                                  </label>
                                  <label class="btn btn-warning">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Revisar
                                  </label>
                                  <label class="btn btn-danger">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Rechazar
                                  </label>
                                </div>
                              </td>

                            </tr>
                            </body>

                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>25/05/2021
                              </td>
                              <td>documento1</td>
                              <td>En revision</td>
                              <td> 
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-success active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Aprobar
                                  </label>
                                  <label class="btn btn-warning">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Revisar
                                  </label>
                                  <label class="btn btn-danger">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Rechazar
                                  </label>
                                </div>
                              </td>

                            </tr>
                            </body>

                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>25/05/2021
                              </td>
                              <td>documento1</td>
                              <td>En revision</td>
                              <td> 
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-success active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Aprobar
                                  </label>
                                  <label class="btn btn-warning">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Revisar
                                  </label>
                                  <label class="btn btn-danger">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Rechazar
                                  </label>
                                </div>
                              </td>

                            </tr>
                            </body>
                          
                          </table>

                          <nav aria-label="...">
                            <ul class="pagination">
                              <li class="page-item ">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                              </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>

                </div>
                <!-- /.card -->
              </section>
      <!-- /.content -->
      </div>


      <!-- /holiiii  -->
 

      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.js">      </script>
      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <scripts src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
      <script>
      $(document).ready(function() {
        $('#documento').DataTable();
      });
      </script>

    </body>
   


    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->


             
  <!-- REQUIRED SCRIPTS -->

  <script src="/js/app.js"></script>
</body>
</html>