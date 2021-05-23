@extends('master') 
@section('seccion')
<div class="box">
    {!!Form::open(['url' => 'login'])!!}
        <label for="email">Correo electrónico:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-envelope-open"> </i></div>
            </div>
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>

        <label for="email" class="mtop16">Contraseña:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
            {!! Form::Password('password', ['class' => 'form-control']) !!}
        </div>

        {!!Form::close() !!}
</div>
  @endsection