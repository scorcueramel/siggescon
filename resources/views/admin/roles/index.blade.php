@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
{{--     @can('admin.categories.create') --}}
    <a href="{{ route('admin.roles.create') }}" class="btn btn-success float-right">Agregar rol</a>
    {{-- @endcan --}}
    <h1>Lista de roles</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>        
@endif
<div class="card">
    @if ($roles->count())
        <div class="card-body">
            <table class="table caption-top">
                <thead class="table-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ROL</th>
                        <th colspan=2></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td width=10px>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role) }}">Editar</a>
                            </td>
                            <td width=10px>
                                <form action="{{ route('admin.roles.destroy',$role) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{-- {{  $users->links() }} --}}
        </div>
    @else
    <div class="card-body">
        <strong>
            No se ha encontrado ningun usuario ...
        </strong>
    </div>
    @endif

</div>
@stop
