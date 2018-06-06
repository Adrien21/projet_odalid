<!doctype html>
<html lang="FR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body class="bg-info">

        @section('sidebar')
            Master sidebar
        @show
        @yield('content')

        <script src="js/bootstrap.min.js'"></script>
    </body>
</html>