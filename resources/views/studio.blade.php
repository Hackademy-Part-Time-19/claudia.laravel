<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio C.</title>
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

<body
    style="background-color: rgba(255, 255, 255, 0.712); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: rgb(97, 25, 25);padding: 0px;">
        <div class="container-fluid p-1">
            <a style="font-weight: 1500; padding-left: 30px;" class="navbar-brand" href="{{ route('studio') }}">Studio
                C.</a>
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
    <section id="video">
        <div style="position: relative; margin-left: 30vh">
            <video width="80%" height="240" controls autoplay
                style="object-fit: cover;height: 90vh; padding: 30px; border-radius: 5%;">
                <source
                    src="https://www.shutterstock.com/shutterstock/videos/1057352173/preview/stock-footage-sad-frustrated-business-executive-overwhelmed-by-work-he-is-overloaded-with-paperwork-and.webm"
                    type="video/mp4">Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <section id="cards1" style="margin-top:20px; padding-left: 30px ; padding-right: 30px;">

        <div class="row" >
            <div class="col-12 col-sm-6 col-lg-6 col-md-3" style="height: 40vh; position: relative;box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
                <div style="position: absolute;top:60px; left:40px;z-index: 1000; ">
                    <h5 style="color: rgb(0, 0, 0);">Consulenza</h5>
                    <p> TI AIUTIAMO A COSTITUIRE LA TUA AZIENDA <br>
                        <br>
                        Invitiamo il cliente a chiedere informazioni allo studio
                        semplici consulenze ordinarie o per la fondazione della sua
                        nuova società. Qualsiasi sia il vostro business, lo studio può
                        darvi i mezzi per aprirvi al settore con adeguati strumenti di
                        consulenza grazie all'autorevolezza e al rigore delle sue indicazioni pratiche.
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6 col-md-3" style="height: 40vh;position: relative;box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
                <div style="position: absolute;top:60px; left:40px;z-index: 1000">
                    <h5 style="color: rgb(0, 0, 0);">Assistenza fiscale e tributaria</h5>

                    <p> ASSISTENZA CONTINUA ALLA TUA AZIENDA <br>
                        <br>
                        Lo studio si occupa di assistenza e pratiche di consulenza societaria e fiscale al fine della
                        formazione di bilanci, redazione di dichiarazioni fiscali, contenziosi tributari, controllo
                        legale e
                        contabile, procedure concorsuali.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="cards2">

        <div class="row" style="margin-top:20px;padding-left: 30px; padding-right: 30px; padding-bottom: 30px;">
            <div class="col-12 col-sm-6 col-lg-6 col-md-3" style="height: 40vh;position: relative;box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
                <div style="position: absolute;top:60px; left:40px;z-index: 1000">
                    <h5 style="color: rgb(0, 0, 0);">Dichiarativi</h5>
                    <p> TI AIUTIAMO A COSTITUIRE LA TUA AZIENDA <br>
                        <br>
                        Invitiamo il cliente a chiedere informazioni allo studio
                        semplici consulenze ordinarie o per la fondazione della sua
                        nuova società. Qualsiasi sia il vostro business, lo studio può
                        darvi i mezzi per aprirvi al settore con adeguati strumenti di
                        consulenza grazie all'autorevolezza e al rigore delle sue indicazioni pratiche.
                    </p>
                </div>

            </div>
            <div class="col-12 col-sm-6 col-lg-6 col-md-3" style="height: 40vh;position: relative;box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
                <div style="position: absolute;top:60px; left:40px;z-index: 1000">
                    <h5 style="color: rgb(0, 0, 0);">Contabilità</h5>
                    <p> TI AIUTIAMO A COSTITUIRE LA TUA AZIENDA <br>
                        <br>
                        Invitiamo il cliente a chiedere informazioni allo studio
                        semplici consulenze ordinarie o per la fondazione della sua
                        nuova società. Qualsiasi sia il vostro business, lo studio può
                        darvi i mezzi per aprirvi al settore con adeguati strumenti di
                        consulenza grazie all'autorevolezza e al rigore delle sue indicazioni pratiche.
                    </p>
                </div>

            </div>
        </div>

    </section>


</body>

</html>
