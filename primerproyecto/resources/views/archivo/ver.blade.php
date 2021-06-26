@extends('layouts.admin')
@section('seccione')
<div class="container">
    <div class="row">
        @foreach($files as $file)
        <div class="col md-4">
            <div class="card">
                <img class= "card-img-top" src="">
                <div class="card body">
                    <strong class="card title">{{$file->filename}}</strong>
                    <p class="card-text"></p>
                    <form action="{{route('deletefile',$file->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{url('/ver/download',$file->filename)}}"class="btn btn-primary">Descargar</a>                        
                        <button type="submit" class="btn btn-danger">Eliminar</button>


                    </form>
                        
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
