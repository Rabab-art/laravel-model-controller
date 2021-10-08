<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Movies</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Genres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="card" style="width: 1200px; margin:0 auto;">
        @forelse($movies as $movie)
        <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$movie->nationality }}</h6>
            <h2 class="card-subtitle mb-2 text-muted">{{$movie->date }}</h2>
        </div>
        @empty
        <h2 class="text-center">Nessun film diponibile</h2>
    @endforelse


    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>