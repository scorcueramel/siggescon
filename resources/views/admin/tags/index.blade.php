@extends('adminlte::page')
@section('title', 'Lista de etiquetas')

@section('content_header')

    @can('admin.tags.create')
        <a class="btn btn-success float-right" href="{{ route('admin.tags.create') }}" >Agregar etiqueta</a>
    @endcan
    <h1>Lista de etiqueta</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
</div>        
@endif
<div class="card">
{{--     <div class="card-header">
        <a href="{{ route('admin.tags.create') }}" class="btn btn-success">Agregar etiqueta</a>
    </div> --}}
    <div class="card-body">
        <table class="table caption-top">
            <thead  class="table-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">ETIQUETA</th>
                <th scope="col">COLOR</th>
                <th scope="col" colspan="2"></th>
              </tr>
            </thead>
            <tbody>
                
            @foreach ($tags as $tag)
                <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td >
                                <a href="#" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2 text-bold text-{{ $tag->color }}">
                                    {{ $tag->color }}
                                </a>
                            </td>
                            <td width="10px">
                                @can('admin.tags.edit')
                                    <a class="btn btn-primary btn-sm" href="{{ route("admin.tags.edit",$tag) }}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.tags.destroy')
                                    <form action="{{ route('admin.tags.destroy',$tag) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"  class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan
                            </td>

                </tr>
              @endforeach 

            </tbody>
          </table>       
    </div>
</div>    
@stop



