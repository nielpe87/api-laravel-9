@extends("app")

@section('content')
<body>
    <h1>Formulário de editar produto</h1>

    <form action="{{ route('products.update', $product->id ) }}" method="post">
        @method('PUT')
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="name" value="{{ $product->name }}">
        <br>
        <label for="">Price:</label>
        <input type="text" name="price" value="{{ $product->price }}">
        <br>
        <button type="submit">Salvar</button>
    </form>
@endsection
