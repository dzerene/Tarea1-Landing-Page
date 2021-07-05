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
              <link rel="stylesheet" href="css/plantilla.css">
                <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Información de los documentos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped table borderless table-hover">
                          <thead class="thead-dark">
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
                              
                              <form action="/home" method="POST" >
                                @csrf
                                <div class="input-group">
                                    <input type="hidden" class="form-control" name="v" value="{{$user->id}}">
                                        <select required class="form-control" id="estado"  name="estado" >
                                            <option value="Pendiente">Pendiente</option>          
                                            <option value="Aprobado" >Aprobar</option>  
                                            <option value="Rechazado">Rechazar</option>  
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" >
                                        <span>Confirmar </span>
                                    </button>
                                </div>
                            </form>
                            
                          <a  class="btn btn-primary btn-danger btn-sm" href="/rechazo"  onclick="return confirm('¿Está seguro de que desea rechazar el documento?')">
                            Rechazar
                        </a>
                        <a  class="btn btn-primary btn-warning btn-sm">
                          En revision
                      </a>
                              
                            </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
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

