<!doctype html>
<html lang="fr">
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
        <form method="POST" action="/connexion">
            <fieldset>
                <h2>Connexion</h2>
                <p>
                    <label for="identifiant">Identifiant :</label><br/>
                    <input type="text" name="identifiant" size="40" required />
                </p>
                <p>
                    <label for="password">Mot de passe :</label><br/>
                    <input type="password" name="password" size="40" required />
                </p>
                {{ csrf_field() }}
            </fieldset>
            <p>
                <input type="submit" name="envoyer" value="Se connecter" />
            </p>
        </form>
    </body>
</html>
