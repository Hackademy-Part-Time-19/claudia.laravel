<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @media screen and (max-width: 1000px) {
            .linkNavBar {
                display: none;
            }
        }
    </style>
</head>
<body style="background-color: rgba(255, 255, 255, 0.712); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: rgb(97, 25, 25);padding: 0px;">
        <div class="container-fluid p-1">
            <a style="font-weight: 1500; padding-left: 30px;" class="navbar-brand" href="{{ route('studio') }}">Studio C.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="display: flex; align-items: left;">
                <div style="display: flex;flex:1">

                </div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 linkNavBar">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('studio') }}">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('noi') }}">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('servizi') }}">servizi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contatti') }}">contatti</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <h1>Chi siamo</h1>
    <h2>La nostra storia inizia in ....</h2>
    
</body>
</html>