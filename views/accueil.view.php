<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <?php include "parts/head.php"?>
        <?php include "parts/header.php"?>
        <title>Accueil</title>
    </head>
    <body class="accueil">
        <div class="container">
            <div class="section-promo">
                <div class="section-left">
                        <h1 class="titre">LA VIE ENTRE QUATRE MURS</h1>
                        <h3>SUIVEZ LES MÉSAVENTURES DES TREMBLAY EN PLEIN CONFINEMENT</h3>
                        <hr>
                        <p>En pleine période de confinement, les Tremblay, une famille de cinq Lorem 
                            Ipsum est un texte d'espace réservé couramment utilisé dans les industries 
                            graphique, imprimée et éditoriale pour prévisualiser les mises en page et les 
                            maquettes visuelles.</p>
                </div>
                    <div class="section-rigth"></div>
            </div>
            <div class="section-video">
                    <?php foreach ($posts as $post) {?>
                        <div class="video">

                        <h2 class="titre"><?=$post["titre"]?></h2>
                        <hr>
                        <h5 class="episode"><?=$post["episode"]?></h5>
                        <p class="description"><?=$post["description"]?></p>
                        <p class="date">Date publication : <?=$post["date_publication"]?></p>
                        <p class="duree">Durée : <?=$post["duree"]?></p>

                        <video width="100%" height="100%" controls>
                            <source src="<?=$post["video"]?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                </div>
                <?php }?>
            </div>
        </div>
        
            <?php include "parts/footer.php"?>
    </body>
</html>
