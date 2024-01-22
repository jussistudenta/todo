<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    {{--  <h1 class="text-center bg-dark border-bottom py-4 text-light shadow">Todo-sovellus</h1>  --}}
    <div class="container-fluid text-center bg-dark py-4">
        <h1 class="text-light">Todo-sovellus (admin)</h1>
        <div class="">
            @if(auth()->user())
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary">Kirjaudu ulos</button>
                </form>
            @endif
        </div>
    </div>

    <div class="container my-4">
        {{ $slot }}
    </div>
</body>
</html>
