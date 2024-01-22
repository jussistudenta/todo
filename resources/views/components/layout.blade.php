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
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">Todo-sovellus</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-light mx-4 btn btn-secondary" aria-current="page" href="{{ route('home') }}">Koti</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light mx-4 btn btn-secondary" href="{{ route('tasks.create') }}">Lisää tehtävä</a>
              </li>

              <!--Anna palautetta -valinta -->
              <li class="nav-item">
                <a class="nav-link text-light mx-4 btn btn-secondary" href="{{ route('feedbacks.create') }}">Anna palautetta</a>
              </li>

              <!-- Palautteet -valinta -->
              <li class="nav-item">
                <a class="nav-link text-light mx-4 btn btn-secondary" href="{{ route('feedbacks.index') }}">Palautteet</a>
              </li>
          </div>
        </div>
      </nav>
    <div class="container my-4">
        {{ $slot }}
    </div>
</body>
</html>
