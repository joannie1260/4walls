<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion des publications</title>
        <?php include "parts/head.php"?>
        <?php include "parts/header_admin.php"?>

    </head>
    <body class="gestion">        
        <div class="container">
        <h1>Gestion des publications</h1>
      
        <div class="gestion-publications">
                <div class="creation-publication">
                        <form action="publication/creation_submit" method="post" enctype="multipart/form-data">
                        <h2>Creation publication</h2>
                        <label>
                                <span>Épisode</span>
                                <input type="text" name="episode">
                            </label>
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
                                <span>Vidéo</span>
                                <input type="file" name="video">
                            </label>
                            <label>
                                <span>Date publication</span>
                                <input type="date" name="date_publication">
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
                    <table class= "paleBlueRows">
                    <thead>

                <tr>
                        <td><h3>Épisode & Titre</h3</td>
                        <td><h3>Description</h3></td>
                        <td><h3>Vidéo</h3></td>
                        <td><h3>Date publication</h3></td>
                        <td><h3>Durée</h3></td>
                        <td><h3>Supression</h3></td>
        
                    </tr>
                </thead>
                <?php foreach ($posts as $post) {?>
                   
                    <tr>
                        <td><?=$post["episode"]?>
                        - <?=$post["titre"]?>
                        </td>
                        <td><?=$post["description"]?></td>
                        <td>
                        <video width="100%" height="100%" controls>
                                        <source src="<?=$post["video"]?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                        </td>
                        <td><?=$post["date_publication"]?></td>
                        <td><?=$post["duree"]?></td>
                        <td> <div>
                            <a class="delete" href="publication/supprimer?id=<?=$post["id"]?>">Supprimer</a>
                        </div></td>
                    
                    </tr>
                    <?php }?>
                   
                    </table>
                       
                    </div>
                </div>
            </div> 
<!-- .gestion-abonnees  -->

<div class="abonnees">

<h2>Gestion des abonnées</h2>
                    <table class= "paleBlueRows">
                         <thead>
                        <td><h3>Email</h3</td>
                    
                         </thead>                   
                        <tr>
                    <?php foreach ($abs as $ab) {?>

                        <td><?=$ab["email"]?>
                            <a class="delete" href="abonnees/supression?id=<?=$ab["id"]?>">Supprimer</a>
                        </div></td>

                    </tr>
                    <?php }?>
                      
                    </div>
                </div>
            </div> 
        
        </div>
    </body>
</html>
