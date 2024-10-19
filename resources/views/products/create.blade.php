@extends("app")

@section('content')

    <h1>Formulário de cadastro de produto</h1>

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="">Preço:</label>
        <input type="number" name="price" value="{{ old('price') }}">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Cadastrar</button>
    </form>

@endsection
