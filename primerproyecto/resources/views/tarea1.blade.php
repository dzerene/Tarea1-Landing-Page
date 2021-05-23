<!doctype html>
<link href="../resources/css/app.css">
<html lang="en">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"></a>
  <img src="https://www.softpatagonia.com/assets/images/logomenu2.png" width=144px height=60px class="d-inline-block align-top"/>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home</a>
    </div>
  </div>
</nav>
<body > 
<div class="container" >
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
</body >

</html>