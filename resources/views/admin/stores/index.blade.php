<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Loja</th>
            <th>Ações</th>

        </tr>
    </thead>
    <tbody>

            @isset($stores)
                @forelse ($stores as $store)
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td>EDITAR | EXCLUIR</td>
                </tr>
                @empty
                <p>Nenhuma loja cadastrada</p>
                @endforelse
            @endisset
    </tbody>
</table>

{{$stores->links()}}
