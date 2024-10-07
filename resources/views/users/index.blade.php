@extends("app")

@section('content')

<h1>Listar todos os usuários</h1>

<table class="table table-houve">
    <head>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>opcoes</th>
        </tr>
    </head>
    <tbody>
        @foreach ($users as $usuario)

        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
            <td>
                <a href="{{ route('users.edit', $usuario->id ) }}">Editar</a>
                <form action="{{ route('users.destroy', $usuario->id ) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Excluir</button>
                </form>

            </td>
        </tr>


        @endforeach

    </tbody>
</table>
@endsection

@section('my-scripts')
<script>
    console.log("okk");
</script>
@endsection
