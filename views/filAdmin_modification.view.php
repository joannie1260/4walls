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

        <div class="gestion-publications">
                <div class="creation-publication">
                        <form action="publication/creation_submit" method="post" enctype="multipart/form-data">
                        <h1>Modification publication</h1>
                        <form action="publication/modifier_submit">
                        <label>
                                <span>Épisode</span>
                                <input type="text" name="episode" value="<?=$post['episode']?>">
                            </label>
                        <label>
                                <span>Titre</span>
                                <input type="text" name="titre">
                            </label>
                            <label>
                                <span>description</span>
=                                <input type="text" name="description" id=""value="<?=$post['description']?>">
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
                                <input type="text" name="duree" Placeholder="ex : 8mins">
                                </select>
                            </label>
                    
                            <div>
                                <input type="submit" name="submit" value="Modifier la publication">
                            </div>
                        
                        </form>
                </div> 

            

        </div>
    </body>
</html>
