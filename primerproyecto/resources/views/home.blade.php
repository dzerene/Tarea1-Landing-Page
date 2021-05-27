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
<div class="form-floating">
    <textarea class="form-control" placeholder="Escriba el motivo del rechazo" id="floatingTextarea2" style="height: 200px" style="padding: 30px 50px 0 0"></textarea>                 
    <button><a href="{{ url('/welcome') }}">Enviar</a></button>
  </div>
@endsection

