<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <?php include "parts/head.php"?>
    </head>
    <body class="connexion">
        <h1 class="logo">Sport-O-Max</h1>
        <h2>Connexion</h2>
        <?php if (isset($_GET['erreur'])) {?>
            <div class="erreur">
                <p>Les informations de connexion fournies sont inexactes.</p>
            </div>
        <?php }?>
        <div class="login">
            <form action="compte/acces" method="POST">
                <input type="text" name="courriel" placeholder="Courriel">
                <input type="password" name="mot_de_passe" placeholder="Mot de passe">
                <input type="submit" name="submit" value="Se connecter">
            </form>
        </div>
        <div class="lien">
        <a href="./">Retour a l'accueil</a>
        </div>
    </body>
</html>
