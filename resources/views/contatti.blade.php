<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
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
   
    <div class="row">
        <h2 style="text-align: center">Comunicaci i tuoi pensieri</h2>
        <form method="post" action="#" style="align-items:center">
            <div class="fields">
                <div class="field">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" />
                </div>
                <div class="field">
                    <label for="message">Messaggio</label>
                    <textarea name="message" id="message" rows="4"></textarea>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Invia Messaggio" /></li>
            </ul>
        </form>
        <ul class="contact">
            <li class="icon solid fa-home">
                Italia
            </li>
            <li class="icon solid fa-phone">(+39) 3333333333</li>
            <li class="icon solid fa-envelope"><a href="#">information@studio.it</a></li>
            <li class="icon brands fa-twitter"><a href="#">twitter.com/studio.it</a></li>
            <li class="icon brands fa-facebook-f"><a href="#">facebook.com/studio.it</a></li>
            <li class="icon brands fa-instagram"><a href="#">instagram.com/studio.it</a></li>
        </ul>

    </div>


</body>

</html>