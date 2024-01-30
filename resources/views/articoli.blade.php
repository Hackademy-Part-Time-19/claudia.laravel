<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

   <h1>{{ config('app.name') ?? 'Titolo placeholder' }}</h1> 
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('homepage') }}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('articles.index') }}">Articoli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categorie
                            </button>
                            <ul class="dropdown-menu">
                               @foreach ($categories as $category)
                               <li><a class="dropdown-item" href="{{route('articles.byCategory', $category)}}">{{$category}}</a></li>
                               @endforeach
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container">
            <div class="row">
                @foreach ($articoli as $chiave => $articolo)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$articolo['titolo']}}</h5>
                            <h6 class="card-title">{{$articolo['nome']}}</h6>
                            <p class="card-text">{{$articolo['descrizione']}}</p>
                            <a href="{{route('articles.show',['id'=>$chiave])}}" class="card-link">Dettaglio</a>
                        </div>
                    </div>
                @endforeach

               
            </div>
        </div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>