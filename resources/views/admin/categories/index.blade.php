@extends('adminlte::page')
@section('title', 'Lista de categorías')

@section('content_header')
    @can('admin.categories.create')
        <a href="{{ route('admin.categories.create') }}" class="btn btn-success float-right">Agregar categoría</a>
    @endcan

    <h1>Lista de categoría</h1> 
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>        
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table caption-top">
                <thead  class="table-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col" colspan="2"></th>
                  </tr>
                </thead>
                <tbody>
                    
                @foreach ($categories as $category)
                    <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td width="10px">
                                    @can('admin.categories.edit')
                                        <a class="btn btn-primary btn-sm" href="{{ route("admin.categories.edit",$category) }}">Editar</a>
                                    @endcan    
                                </td>
                                <td width="10px">
                                    @can('admin.categories.destroy')
                                        <form action="{{ route('admin.categories.destroy',$category) }}" method="POST">
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

