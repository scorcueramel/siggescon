@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.roles.store']) !!}
            
            @include('admin.roles.partials.form')

            {!! Form::submit('Crear Rol',['class'=>'btn btn-primary']) !!}
            {!! form::close() !!}
        </div>
    </div>
@stop