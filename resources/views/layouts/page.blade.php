<!doctype html>
<html lang="FR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ODALID-@yield('titre')</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body class="bg-info">
        <header>
        @section('header')

                <h1>Header toujours visible </h1>

        @show
        </header>
        <main>
        @yield('content')
        </main>
        <script src="js/bootstrap.min.js'"></script>
    </body>
</html>