<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
    <x-layout>
        
    </x-layout>
</head>

<body style="background-color: rgba(255, 255, 255, 0.712); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
    <x-navbar>
        
    </x-navbar>
   
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