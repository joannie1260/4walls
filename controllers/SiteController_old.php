<?php

require_once "bases/BaseController.php";
require_once "models/Utilisateurs.php";
require_once "models/Publications.php";
require_once "models/Abonnees.php";
require_once "utils/Upload.php";


class SiteController extends BaseController
{
    /**
     * Vue Accueil 
     */

    public function accueil()
    {
        $publications = new Publications();
        $posts = $publications->tous();

        include "views/accueil.view.php";
    }  

    /**
     * Vue Entreprise 
     */

    public function entreprise()
    {
        include "views/entreprise.view.php";
    }
    
    /**
     * Vue Création de compte 
     */
    public function creationCompte()
    {
        include "views/creationCompte.view.php";
    }

    /**
     * POST de création de compte
     * Ne sera pas visible par l'utilisateur
     */

    public function creationCompteSubmit()
    {
        // Si le form est envoyé
        if (isset($_POST["submit"])) {
            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $courriel = $_POST["courriel"];

            // Le mot de passe est encrypter ici avec password_hash
            $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT);

            // Déplace le fichier uploader et retourne le chemin
            // $upload = new Upload("photo");
            // $photo = $upload->placerDans("public/uploads");

            // Fait le insert à l'aide du model
            $utilisateur = new Utilisateurs();
            $success = $utilisateur->creer($prenom, $nom, $courriel, $mot_de_passe);

            // Si le insert s'est bien passé, retourne vers l'accueil (connexion)
            if ($success) {
                header("location:../connexion");
                exit();
            } else {
                // S'il y a eu une erreur, on retourne vers le formulaire d'inscription
                header("location:creation?erreur=2");
                exit();
            }

        } else {
            // Si le form n'a pas été envoyé, on retourne vers le form d'inscription
            header("location:creation?erreur=1");
            exit();
        }
    }

    /**
     * Vue admin 
     */

    public function admin()
    {
        include "views/connexion.view.php";
    }


    /**
     * POST de connexion
     * Ne sera pas visible par l'utilisateur
     */
    public function connexionSubmit()
    {
        // Si le form est envoyé
        if (isset($_POST["submit"])) {
            $courriel = $_POST["courriel"];
            $mot_de_passe = $_POST["mot_de_passe"];

            // Vérifie si le nom d'utilisateur et le mot de passe existent dans la BDD.
            // S'ils existe, défini $_SESSION["utilisateur_id"] avec le id de l'utilisateur
            $utilisateur = new Utilisateurs();
            $success = $utilisateur->verifierConnexion($courriel, $mot_de_passe);

            // Si le login est bon, redirive vers le gestion des activites
            if ($success) {
                header("location:../fil-nouvelles");
            } else {
                // Si le login est incorrect, reviens vers la page de login
                header("location:../accueil?erreur=1");
                exit();
            }

        } else {
            // Si le form n'a pas été envoyé correctement, reviens vers la page de login
            header("location:../accueil?erreur=2");
            exit();
        }
    }


    public function filNouvelles()
    {
        // Récupère le ID spécifié dans la session par le model Utilisateurs dans la méthode verifierConnexion
        $id = $_SESSION["utilisateur_id"];
 
        $utilisateurs = new Utilisateurs();
        $user = $utilisateurs->parId($id);

        $publications = new Publications();
        $posts = $publications->tous();

        $abonnees = new Abonnees();
        $abon = $abonnees->tous();

        include "views/filAdmin.view.php";
    }

    /**
     * POST de création d'une publication
     * Ne sera pas visible par l'utilisateur
     */
    public function creationPublicationSubmit()
    {
        // Si le form est envoyé
        if (isset($_POST["submit"])) {
            $titre = $_POST["titre"];
            $description = $_POST["description"];
            $date_publication = $_POST["date_publication"];
            $duree = $_POST["duree"];

            // Déplace le fichier uploader et retourne le chemin
            $upload = new Upload("image");
            $image = $upload->placerDans("public/images");
            $upload2 = new Upload("video");
            $video = $upload2->placerDans("public/videos");

            // Fait le insert à l'aide du model
            $publications = new Publications();
            $success = $publications->creerPublication($titre, $description, $date_publication, $duree, $image, $video);
       

            // Si le insert a fonctionné, retourne vers le fil de nouvelles
            if ($success) {
                header("location:../fil-nouvelles");
                exit();
            } else {
                // Sinon, retourne quand même vers le fil de nouvelles, mais avec le paramètre GET erreur
                header("location:../fil-nouvelles?erreur=11");
                exit();
            }

        } else {
            // Si le form n'a pas été envoyé correctement, retourne sur le fil avec une erreur
            header("location:../fil-nouvelles?erreur=1");
            exit();
        }
    }
    

    public function suprimerPublicationSubmit ()
    {
         // Si le supprimer est envoye
         if (isset($_POST["submit"])) {

            // Vérifie si le nom d'utilisateur et le mot de passe existent dans la BDD.
            // S'ils existe, défini $_SESSION["utilisateur_id"] avec le id de l'utilisateur
            $publications = new Publications();
            $success = $publications->suprimerPublicationSubmit();

            // Si le login est bon, redirive vers le fil de nouvelles
            if ($success) {
                header("location:../fil-nouvelles");
            } else {
                // Si la publication est incorrect rester au meme endroit ? ajout erreur3
                header("location:../accueil?erreur=3");
                exit();
            }

        } else {
            // Si le form n'a pas été envoyé correctement, reviens vers la page de login
            header("location:../accueil?erreur=2");
            exit();
        }

    }

    
    public function abonnees(){
         // Si le form est envoyé
        if (isset($_POST["submit"])) {
                $email = $_POST["email"];
    
        // Fait le insert à l'aide du model
        $abonnees = new Abonnees();
        $success = $abonnees->creer($email);
           
        // Si le insert a fonctionné, retourne vers le fil de nouvelles
        if ($success) {
            header("location:../accueil");
            exit();
                
        } else {
        // Sinon, retourne quand même vers le fil de nouvelles, mais avec le paramètre GET erreur
        header("location:../accueil?erreur=11");
        exit();
                }  
    }



}
}
