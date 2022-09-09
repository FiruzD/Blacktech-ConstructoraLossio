@extends('adminlte::page')

@section('title', 'Home')

@section('plugins.Sweetalert2',true)

@section('content_header')
    <h1>Panel de Administración</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-success">
            <h1 class="card-title">Bienvenid@ {{ Auth::user()->name }}</h1>
        </div>
        <div class="card-body">
            <p>Registra y lleva el control de tus proyectos</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        Swal.fire(
    'Bienvenid@',
    'Haz Click en el boton!',
    'success'
)
    </script>
@stop
