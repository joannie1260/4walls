<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
        <?php include "parts/head.php"?>
    </head>
    <body class="accueil">
        <h1 class="logo">Sport-O-Max</h1>
        <h2>Liste des activités sportives St-Jérôme</h2>         
        <hr>
        <div class="publications">
                <?php foreach ($posts as $post) {?>
                    <div class="publication">
                        <h3 class="titre"><?=$post["nom"]?></h3>
                        <p class="categorie"><?=$post["categorie_nom"]?></p>
                        <div>
                            <img src="<?=$post["image"]?>" alt="">
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="connexion-a">
            <a href="connexion">Connexion</a>
            </div?
    
        </body>
</html>
