<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
</head>

<body>
    <ul>
        <li> <a href="{{route('studio')}}">Studio</a></li>
        <li> <a href="{{route('servizi')}}">Servizi</a></li>
    </ul>

    <div class="inner">
        <h2 class="major">Comunicaci i tuoi pensieri</h2>
        <form method="post" action="#">
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
            <li class="icon solid fa-envelope"><a href="#">information@presto.it</a></li>
            <li class="icon brands fa-twitter"><a href="#">twitter.com/presto.it</a></li>
            <li class="icon brands fa-facebook-f"><a href="#">facebook.com/presto.it</a></li>
            <li class="icon brands fa-instagram"><a href="#">instagram.com/presto.it</a></li>
        </ul>

    </div>


</body>

</html>