<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    
    <body>
        <form method="POST" action="">
            <fieldset>
                <h2>Connexion</h2>
                <p>
                    <label for="pseudo">Pseudo :</label><br/>
                    <input type="text" name="pseudo" size="40" required />
                </p>
                <p>
                    <label for="password">Mot de passe :</label><br/>
                    <input type="password" name="mdp" size="40" required />
                </p>
            </fieldset>
            <p>
                <input type="submit" name="envoyer" value="Se connecter" />
            </p>
        </form>
    </body>
</html>
