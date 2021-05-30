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
      <a href="{{ url('/welcome')}}" class="brand-link">
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
            <img src="../img/upload.png" class="img-circle elevation-2" alt="Upload">
          </div>
          <div class="info">
            <a href="/subirarchivo">Subir nuevo documento</a>
          </div>
        </div>
  
        <nav class="mt-2">
          <li class="nav-item">
            <a href="{{ route('post.create') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Create post
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{route('post.notificationsx') }" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Notification
              </p>
            </a>
          </li>
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
                      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                          <div class="image">
                            <img src="../img/logout.png" class="img-circle elevation-2" alt="User Image">
                          </div>
                          {{ __('Cerrar Sesión') }}
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
          <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li  class="breadcrumb-item"><a href="#">Home</a></li>                
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
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

  <script src="/js/app.js"></script>
  
</body>

</html>