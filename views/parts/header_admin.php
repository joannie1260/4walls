<header>
        <div class="nav-bar">
                <div class="left"> 
                </div>
             
                <div class="right">
                <?php if (isset($_GET['erreur'])) {?>
            <div class="erreur">
                <p>Les informations de connexion fournies sont inexactes.</p>
            </div>
        <?php }?>
                <div class="user">
                        <span>
                        <?=$user["prenom"]?> <?=$user["nom"]?>
                        <br>
                        <a href="<?=BASE?>">Déconnexion</a>
                        </span>
                </div>
                        <a href="accueil">Retour Accueil</a>
                </div>
        </div>
</header>
