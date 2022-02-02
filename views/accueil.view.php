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
                        <h2>SUIVEZ LES MÉSAVENTURES DES TREMBLAY EN PLEIN CONFINEMENT</h2>
                        <hr>
                        <p>En pleine période de confinement, les Tremblay, une famille de cinq Lorem 
                            Ipsum est un texte d'espace réservé couramment utilisé dans les industries 
                            graphique, imprimée et éditoriale pour prévisualiser les mises en page et les 
                            maquettes visuelles.</p>
                            <div class="a-bouton">
                            <a href="laserie">LA SÉRIE</a>
                            </div>
                    </div>
                    <div class="section-rigth">
                        <img src="" alt="" srcset="">
                    </div>
                </div>

                <div class="section-video">
                    <div class="section-v-l">
                        <div class="titre"><h1>Titre1</h1></div>
                        <div class="episode"><h2>Titre2</h2></div>
                        <div class="description"><p>Lorem Ipsum est un texte d'espace 
                            réservé couramment utilisé dans les industries graphique, 
                            imprimée et éditoriale pour prévisualiser les mises en page 
                            et les maquettes visuelles.</p></div>
                            <div class="date"><h4>Date publication:</h4></div>
                    </div>
                    <div class="section-v-r">
                        <div class="video1">
                        <div class="publications">
                <?php foreach ($posts as $post) {?>
                    <div class="publication">
                        <h3 class="titre"><?=$post["titre"]?></h3>
                        <p class="categorie"><?=$post["categorie_nom"]?></p>
                        <div>
                            <img src="<?=$post["image"]?>" alt="">
                        </div>
                    </div>
                <?php }?>
            </div>

                        </div>
                        <div class="video2">
                                <video width="320" height="240" controls>
                                <source src="<?=BASE?>/public/videos/header_accueil.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                                </video> 
                        </div>
                        <div class="video3"></div>
                        <div class="fleche"></div>
                    </div>
                </div>

                <div class="section-commanditaires">
                    <div class="titre-section-commanditaire">
                        <h2>Nos partenaires</h2>
                        <hr>
                    </div>
                        <div class="logo1"></div>
                        <div class="logo2"></div>
                        <div class="logo3"></div>
                </div>

                <div class="infolettre">
                    <div class="info-left">
                        <h1>RESTEZ À L'AFFUT DES NOUVEAUX ÉPISODES</h1>
                    </div>
                        <div class="info-center">
                        <h1>ABONNEZ-VOUS À NOTRE INFOLETTRE</h1>
                        <input type="email" name="courriel" id="" placeholder="Courriel">
                        </div>
                        <div class="info-right">
                        </div>
                </div>
            <?php include "parts/footer.php"?>
        </div>
    </body>
</html>
