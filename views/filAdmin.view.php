<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion des activités</title>
        <?php include "parts/head.php"?>
    </head>
    <body class="fil-activites">
        <div class="conteneur">
            <header>
                <h1 class="logo">
                    <img src="<?=BASE?>/public/images/logo.png" alt="">
                Sport-O-Max
                </h1>
                <div class="user">
                    <span>
                        <?=$user["prenom"]?> <?=$user["nom"]?>
                        <br>
                        <a href="<?=BASE?>">Déconnexion</a>
                    </span>
                </div>
            </header>
            <h2>Creation activités</h2>
            <hr>
            <form action="publication/creation_submit" method="post" enctype="multipart/form-data">
                <label>
                    <span>Nom</span>
                    <input type="text" name="nom">
                </label>
                <label>
                    <span>Catégorie</span>
                    <select name="pty_select" > 
                        <?php foreach($categories as $categorie => $value){ ?>
                    <option value="<?php echo $categorie; ?>"><?php echo $value;?></option> 
                    <?php } ?>
                    </select>
                </label>
                <label>
                    <span>Média</span>
                    <input type="file" name="image">
                </label>
                <div>
                    <input type="submit" name="submit" value="Créer la publication">
                </div>
            </form>

            <div class="publications">
                <h2>Gestion des activités</h2>
                
                <hr>
                <?php foreach ($posts as $post) {?>
                    <div class="publication">
                        <h3 class="nom"><?=$post["nom"]?></h3>
                        <p class="utilisateur">Par <?=$post["prenom"]?> <?=$post["nom"]?></p>                        <div>
                            <img src="<?=$post["image"]?>" alt="">
                            <form action="publication/supprimer">
                            <div class="supprimer">
                            </form>
                        <input type="submit" name="submit" value="Supprimer">
                        </div>
                        <hr>
                    </div>
                <?php }?>
            </div>
        </div>
    </body>
</html>
