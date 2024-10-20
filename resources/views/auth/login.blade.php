<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">\
        <div class="mb-3">
            <h1>Login</h1>
        </div>


        <form action="{{ route('authenticate') }}" method="post">
            @csrf

            <div class="mb-3">

                <label for="" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email">
                @error('email')
                    {{ $message }}
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
