<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }} - {{ Route::currentRouteName() }}</title> --}}
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="admin">
        @include('partials.sidebar')
        <div id="wrapper">
            <div class="content">
                <header>
                    @include('partials.administration-navbar')
                </header>




                <div class="container-fluid">
                    <h2 class="mt-4">Benvenuto nell'area amministrativa!</h2>
                    <p>Questo è un esempio di un template dettagliato per una pagina di amministrazione.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Statistiche Utenti</div>
                                <div class="card-body">
                                    <p>Numero totale di utenti: <strong>100</strong></p>
                                    <p>Utenti attivi: <strong>80</strong></p>
                                    <p>Utenti inattivi: <strong>20</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Prodotti Popolari</div>
                                <div class="card-body">
                                    <p>Prodotto 1</p>
                                    <p>Prodotto 2</p>
                                    <p>Prodotto 3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @include('partials.navbar')
            <main class="">
                @yield('content')
            </main> --}}
                </div>
            </div>
</body>

</html>
