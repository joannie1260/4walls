<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Création de compte</title>
        <?php include "parts/head.php";?>
    </head>
    <body class="creation-compte">
        <div class="conteneur">
            <h1>Page de création de compte</h1>

            <?php if (isset($_GET['erreur'])) {?>
                <div class="erreur">
                    <p>
                        Une erreur est survenue.
                    </p>
                </div>
            <?php }?>

            <form action="compte/creation_submit" method="post" enctype="multipart/form-data">
                <label>
                    <span>Prénom</span>
                    <input type="text" name="prenom">
                </label>
                <label>
                    <span>Nom</span>
                    <input type="text" name="nom">
                </label>
                <label>
                    <span>Courriel</span>
                    <input type="text" name="courriel">
                </label>
                <label>
                    <span>Mot de passe</span>
                    <input type="password" name="mot_de_passe">
                </label>
                <div>
                    <input type="submit" value="Créer un compte" name="submit">
                </div>
            </form>

            <p>
                <a href="../">Retour à la connexion</a>
            </p>
        </div>
    </body>
</html>
