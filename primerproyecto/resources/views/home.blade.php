@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('seccione')
<link media="screen and (max-width: 480px)" href="mobile.css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
              <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
            
                <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Información de los documentos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>ID Documento</th>
                              <th>ID Usuario</th>
                              <th>Nombre Archivo</th>
                              <th>Subido</th>
                              <th>Estado</th>
                              <th>Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($users as $user)
                            <tr>
                            <td data-label="ID Documento">{{ $user->id }}</td>
                            <td data-label="ID Usuario">{{ $user->user_id }}</td>
                            <td data-label="Nombre Archivo">{{ $user->filename }}</td>
                            <td data-label="Subido">{{ $user->created_at}}</td>
                            <td data-label="Estado">{{ $user->estado}}</td>
                            <td data-label="Acción"> 
                              
                              <a  class="btn btn-primary">
                                Aprobar
                            </a>
                          <a  class="btn btn-primary" href="/rechazo"  onclick="return confirm('¿Está seguro de que desea rechazar el documento?')">
                            Rechazar
                        </a>
                              
                            </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="form group">
                        <select name="filtro_estado" id="filtro_estado" class="form-control"required>
                          <option value="">Escoja estado</option>
                          @foreach ($users as $user)
                          <option value="{{$user->estado}}">Aprobado</option>
                          <option value="">Rechazado</option>
                          <option value="">Esperando revisión</option>
                          @endforeach

                          <!-- /holiiii 
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
                           -->
                </div>
                <!-- /.card -->
              </section>
      <!-- /.content -->
      </div>


      <!-- /holiiii  -->
 

      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.js">      </script>
      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
      <script>
      $($documento).ready(function() {
        $('#documentos').DataTable();
      });
      </script>

    </body>
@endsection

