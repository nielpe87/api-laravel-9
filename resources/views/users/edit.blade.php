@extends("app")

@section('content')
<body>
    <h1>Formulário de editar de usuário</h1>

    <form action="{{ route('users.update', $user->id ) }}" method="post">
        @method('PUT')
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="name" value="{{ $user->name }}">
        <br>
        <button type="submit">Salvar</button>
    </form>
@endsection
