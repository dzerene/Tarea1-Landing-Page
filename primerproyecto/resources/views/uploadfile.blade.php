@extends('layouts.admin')
@section('seccione')

      <div class="container">
        <div class='content'>
          <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session()->get('message'))
                <div class="alert alert-success">
                  {{ session()->get('message') }}
                </div>
                @endif
                <div class="card">
                  
                    <div class="card-body">
                    <form method="POST" type="submit" action="{{ route('file.store') }}" aria-label="{{ __('Upload') }}">@csrf
                  
                          </div>
                            <div class="form-group row">
                              <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Seleccionar Archivo') }}</label>
                              <div class="col-md-6">
                                <div id="file" class="dropzone"></div>
                              </div>    
                            </div>
                        
  
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <a href="/notification" class="btn btn-primary">
                                        {{ __('Subir') }}
                                    </a>
                                
                                <div class="panel-body" id="uploaded_image">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

  <!-- REQUIRED SCRIPTS -->
@endsection
