@extends('layouts.admin')
@section('content1')
    <form action="{ route(post.store) }" method="POST">
    @csrf   
    <div class="form group">
        <label>Nombre documento</label>
        <input type="text" class="form-control" name="nombre documento">
        </div>
        <div class="form group">
        <label>Contenido documento</label>
        <input type="text" class="form-control" name="contenido documento">
        </div>
        <button class="btn btn-dark" type="submit">Ingresar</button>
    </form>
@endsection()