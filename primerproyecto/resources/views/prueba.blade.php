@extends('master') 
@section('seccion')

    <div class="row">
      <div class="col">
      <div class="card" style="width: 18rem;">
    <img src="https://login.gov/assets/img/login-gov-600x314.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sistema de logueo</h5>
      <p class="card-text">Se inicia sesión mediante un ID de la empresa y una contraseña personal que ha sido encriptada.</p>
      <a href="{{route('logins')}}" class="btn btn-primary">Login</a>
    </div>
  </div >
      </div>
      <div class="col">
      <div class="card" style="width: 18rem;">
    <img src="https://1.bp.blogspot.com/-z6LMrSwx_XA/XbhhKRAfMZI/AAAAAAAAoFs/CCSm0SMIq-47MjxmjGvnmcZd4DN3GG63QCLcBGAsYHQ/s1600/email-4539382_1280.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sistema de notificaciones</h5>
      <p class="card-text">Al momento de recibir nuevos documentos para su revisión, el sistema notificará automáticamente al usuario a través de correo.</p>
      <a href="#" class="btn btn-primary">Vista previa</a>
    </div>
  </div>
      </div>
      <div class="col">
      <div class="card" style="width: 18rem;">
    <img src="https://ricdoc.com/wp-content/uploads/2018/02/ricdoc-ecm-bpm-aprobaci%C3%B3n-facturas-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sistema de aprobación</h5>
      <p class="card-text">Cada documento deberá tener un estado el cual será definido por el usuario declarando si está aprobado o reprobado.</p>
      <a href="#" class="btn btn-primary">Vista previa</a>
    </div>
  </div>
      </div>
    </div>
  </div>
  <style> .navbar {
    margin-bottom: 20px;
  }
  </style>
  @endsection