@extends("app")

@section('content')

<h1>Listar todos os produtos</h1> <a href="{{ route('products.create') }}">Adicionar</a>
<table class="table table-houve">
    <head>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th>opcoes</th>
        </tr>
    </head>
    <tbody>
    @foreach ($products as $product)

    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->category->name }}</td>
        <td>
            <a href="{{ route('products.edit', $product->id ) }}">Editar</a>
            <form action="{{ route('products.destroy', $product->id ) }}" method="post">
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
