@extends('adminlte::page')
@section('title', 'Publicaciones')

@section('content_header')
    @can('admin.posts.create')
        <a href="{{ route('admin.posts.create') }}" class="btn btn-success float-right">Nueva publicación</a>
     @endcan
    <h1>Listado de Publicaciones</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop