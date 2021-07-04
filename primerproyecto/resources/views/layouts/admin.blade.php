<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\recivedocument;
use App\Models\Post;
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="dropzone.css" rel="stylesheet" type="text/css">
  <link href="{{asset('css/dropzone.css')}}" rel="stylesheet">
  <script src={{asset('js/dropzone.js')}}></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
  <title>Notilog</title>
  <link rel="shortcut icon" href="img/partelogo.png" type="image/x-icon">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
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
        <li class="nav-item dropdown">
          <a class="nav-link " data-toggle="dropdown" href="#">
            <i class="pull-rigth far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">
            {{(count(auth()->user()->unreadNotifications))}}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu">
          <span class="dropdown-header">New Notifications</span>
          @forelse(auth()->user()->unreadNotifications as $notification)
          <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 
              {{$notification->data['name']}}
              {{$notification->data['MSG']}}
              <span class="float text-muted text-sm">{{$notification->created_at->diffForHumans()}}</span>
              <div class="dropdown-divider"></div>
            </a>
          @empty
          <span class="float text-muted text-sm"> Sin notificaicones nuevas</span>
          @endforelse
          <span class="dropdown-header">Notifications reads</span>
          @foreach (auth()->user()->readNotifications as $notification)
          <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 
              {{$notification->data['MSG']}}
              <span class="float text-muted text-sm">{{$notification->created_at->diffForHumans()}}</span>
              <div class="dropdown-divider"></div>
            </a>
          @endforeach
          <div class="dropdown-divider"></div>
          <a href="{{ route('markAsRead')}}" class="dropdown-item dropdown-footer"> Mark all read.</a>
            
            
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
              class="fas fa-th-large"></i></a>
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
      <a href="{{ url('/')}}" class="brand-link">
        <img src="../img/logo.png" alt="SoftPatagonia Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">NotiLog</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-5 d-flex">
          <div class="image">
            <img src="../img/perfil.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          </div>
        </div>
        <div class="user-panel mt-3 pb-3 mb-5 d-flex">
          <div class="image">
            <img src="../img/home.png" class="img-circle elevation-2" alt="Home">
          </div>
          <div class="info">
            <a href="/home">Inicio</a>
          </div>
        </div>
        <div class="user-panel mt-3 pb-3 mb-5 d-flex">
          <div class="image">
            <img src="../img/file.png" class="img-circle elevation-2" alt="Doc">
          </div>
          <div class="info">
            <a href="/ver">Ver documentos</a>
          </div>
        </div>
        <div class="user-panel mt-3 pb-3 mb-5 d-flex">
          <div class="image">
            <img src="../img/upload.png" class="img-circle elevation-2" alt="Upload">
          </div>
          <div class="info">
            <a href="/subirarchivo">Subir nuevo documento</a>
          </div>
        </div>
      <!--  <div class="user-panel mt-3 pb-3 mb-5 d-flex">
          <div class="image">
            <img src="../img/not.png" class="img-circle elevation-2" alt="Upload">
          </div>
          <div class="info">
            <a>Notificacion</a>
          </div>
        </div>-->
        <div class="user-panel mt-3 pb-3 mb-5 d-flex">
          <div class="image">
            <img src="../img/logout.png" class="img-circle elevation-2" alt="Logout">
          </div>
          <div class="info">
            <a class="nav-link " href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          {{ __('Cerrar Sesión') }}
          </div>
        </div>
  <!---------------------------------------------------------------------------------------
        <nav class="mt-2">
            <a href="{{ route('post.create') }}" class="nav-link">
            </a>
          SI SACAMOS ESTO QUEDA LA Z
          ----------------------------------------------------------------------------------->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">



        

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <!--USER Y LOG OUT-->
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item ">
                      <a class="nav-link " href="{{ route('logout') }}"  
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                      </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                  </li>
              @endguest
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
      <div class="content-header">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!---------------------------------------------------------------AQUI SE TRABAJA------------------------------------------------------------------------------------------->
      <div class="contenedore">
        @yield('seccione')
      </div>
      <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
  
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="/js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js" integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="dropzone.js" type="text/javascript"></script>
  <script>
    var drop = new Dropzone('#file', {
      createImageThumbnails: true,
      addRemoveLinks: true,
      clickable: true,
      acceptedFiles:".png, .pdf, .jpeg, .jpg",
      url: "{{ route('upload') }}",
      headers: {
        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
      }
    });
  </script>
</body>

</html>