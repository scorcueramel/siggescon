<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search"  class="form-control" placeholder="Ingrese el nombre de la publicación">
        </div>
        @if ($posts->count())
            <div class="card-body">
                <table class="table caption-top">
                    <thead  class="table-light">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">PUBLICACION</th>
                        <th scope="col" colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    @foreach ($posts as $post)
                        <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->name }}</td>
                                    <td width="10px">
                                        @can('admin.posts.edit')
                                            <a class="btn btn-primary btn-sm" href="{{ route("admin.posts.edit",$post) }}">Editar</a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('admin.posts.destroy')
                                            <form action="{{ route('admin.posts.destroy',$post) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"  class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>
                                        @endcan
                                    </td>

                        </tr>
                        @endforeach 

                    </tbody>
                    </table>       
            </div>
            <div class="card-footer">
                {{ $posts->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>
                    No se ha encontrado ninguna publicación ...
                </strong>
            </div>
        @endif
    </div>      
</div>