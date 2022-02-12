<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion des publications</title>
        <?php include "parts/head.php"?>
    </head>
    <body class="fil">
        <div class="container">
            <div class="logo"></div>
            <div class="user">
                        <span>
                            <?=$user["prenom"]?> <?=$user["nom"]?>
                            <br>
                            <a href="<?=BASE?>">Déconnexion</a>
                        </span>
                    </div>
                </header>
                <div class="creation-publication">
                <h2>Creation publication</h2>
                <hr>
                <form action="publication/creation_submit" method="post" enctype="multipart/form-data">
                    <label>
                        <span>Titre</span>
                        <input type="text" name="titre">
                    </label>
                    <label>
                        <span>description</span>
                        <input type="text" name="description" id="">
                        </select>
                    </label>
                    <label>
                        <span>Date publication</span>
                        <input type="date" name="date_publication">
                    </label>
                    <label>
                        <span>Image</span>
                        <input type="file" name="image">
                    </label>
                    
                    <label>
                        <span>Vidéo</span>
                        <input type="file" name="video">
                    </label>
                    <label>
                        <span>Duree</span>
                        <input type="text" name="duree" Placeholder="ex : 8mins"id="">
                        </select>
                    </label>
                    <div>
                        <input type="submit" name="submit" value="Créer la publication">
                    </div>
                
                </form>
               </div> 
                <div class="publications">
                <h2>Gestion des publications</h2> 
                    <hr>
                    <?php foreach ($posts as $post) {?>
                        <div class="publication">
                            <h2 class="titre"><?=$post["titre"]?></h2>
                            <p class="description"><?=$post["description"]?></p>
                                <img src="<?=BASE?>/public/images/<?=$post["image"]?>" alt="">
                            
        
                            <video width="15%" height="20%" controls>
                                    <source src="<?=BASE?>/public/videos/<?=$post["video"]?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                    </video>
                            <p class="date"><?=$post["date_publication"]?></p>
                            <p class="duree"><?=$post["duree"]?></p>
                            <?php }?>
                    </div>
            </div>
<!-- Creation de compte -->
            <h1>Création de compte utilisateur</h1>

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
        </div>
    </body>
</html>
