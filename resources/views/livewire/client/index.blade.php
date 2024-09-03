<div>
    <h1>Lista de Clientes</h1>

    <br>
    <input type="text" wire:model.live="search" class="form-control" placeholder="Digite sua busca">
    <br>
    <br>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr wire:key="{{ $client->id }}">
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        <button type="button" class="btn btn-primary">Editar</button>
                        <button type="button" class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
