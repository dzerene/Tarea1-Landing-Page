@extends('layouts.admin')
@section('seccione')

<form method="POST" action="" aria-label="">@csrf
  <div class="form-group row">
      <label for="motivo" class="col-sm-4 col-form-label text-md-right">Escriba motivo de rechazo</label>
      <div class="col-md-6">
          <textarea id="motivo" cols="10" rows="10" class="form-control{{ $errors->has('motivo') ? ' is-invalid' : '' }}" name="motivo" value="{{ old('motivo') }}" required autofocus></textarea>
      </div>
  </div>
  <div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Subir') }}
        </button>
</div>
</div>
</form>
@endsection