@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                              
                              <th>FECHA</th>
                              <th>NOMBRE</th>
                              
                              <th>ACCION</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($documentos as $documento)
                              <tr>

                                <td>{{ $documento->title }}</td>
                                <td>{{ $documento->overview }}</td>
                                
                                
                                
                                <td> 
                                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-success active">
                                      <input href="{{ route('login') }}" type="radio" name="options" id="option1" autocomplete="off" checked> Aprobar
                                    </label>
                                    <label class="btn btn-warning">
                                      <input type="radio" name="options" id="option2" autocomplete="off"> Revisar
                                    </label>
                                    <label class="btn btn-danger">
                                      <input type="radio" name="options" id="option3" autocomplete="off"> Rechazar
                                    </label>
                                  </div>
                                  
                                </td>
                                @endforeach
                              </tr>
                            </body>
                          </table>
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

