<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users - Create</title>
</head>
<body>

    <h1>Formulário de cadastro de usuário</h1>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="">Senha:</label>
        <input type="password" name="password" value="{{ old('password') }}">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
