<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eureka FPMOZ</title>

        <meta name="description" content="Eureka je studentski časopis Fakulteta prirodoslovno matematičkih i odgojnih znanosti. Sva izdanja Eureke, pored klasične verzije, dostupna su i u PDF formatu, a mogu se pronaći na stranicama FPMOZ-a i web stranici Eureke. Svi studenti koji su zainteresirani za razvoj projekta mogu se javiti na eureka@fpmoz.sum.ba">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <script src="https://kit.fontawesome.com/c6fd8dbab2.js" crossorigin="anonymous"></script>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                text-decoration: none !important;
            },
            html, body {
                background-color: white;
                color: #636b6f;
                font-family: 'Roboto', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div id="app">
            
            <App />
            
        </div>



        <script src="{{ asset('js/app.js?version=8') }}"></script>
    </body>
</html>
