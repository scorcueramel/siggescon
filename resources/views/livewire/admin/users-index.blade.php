<div class="card">
    <div class="card-header">
        <x-jet-input class="form-control" type="text" wire:model="search" placeholder="Busca un usuario ..."/>
    </div>
    @if ($users->count())
        <div class="card-body">
            <table class="table caption-top">
                <thead class="table-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">EMAIL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td width=10px>
                                <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{  $users->links() }}
        </div>
    @else
    <div class="card-body">
        <strong>
            No se ha encontrado ningun usuario ...
        </strong>
    </div>
    @endif

</div>
