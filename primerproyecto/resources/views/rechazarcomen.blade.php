@extends('layouts.admin')
@section('seccione')
<div class="form-floating">
    <textarea class="form-control" placeholder="Escriba el motivo del rechazo" id="floatingTextarea2" style="height: 200px" style="padding: 30px 50px 0 0"></textarea>
    <button><a href="{{ url('/welcome') }}">Enviar</a></button>
  </div>
@endsection