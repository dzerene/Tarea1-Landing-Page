<?php
use App\Http\Controllers\PostController;
?>
@extends('layouts.admin')
@section('content1')
@csrf 
hola
    <!--<div class="container">
        <div class="row justify-cintent-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Unread Notification</div>
                    <div class="card-body">
                    @if(auth()->user())
                    @forelse ($postNotifications as $notification)
                    <div class="alert alert-default-warning">
                        Post MSG:{{$notification->data['MSG']}}
                        <p>{{$notification->created_at->diffForHumans()}}</p>
                    </div>
                </div></div></div></div></div>-->
@endsection();