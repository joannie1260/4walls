<?php
// Liste d'url accessibles par le navigateur

/*
Format:
url => méthode du controlleur
 */

$routes = [


    // Page d'accueil
    "accueil" => "accueil",

    //Page entreprise
    "entreprise"=> "entreprise",

    // Page de formulaire de création de compte
    "compteCreation" => "creationCompte",

    // POST de création de compte
    "compte/creation_submit" => "creationCompteSubmit",

    //Page connexion
    "connexion" => "formConnexion",

    // POST de connexion
    "compte/acces" => "connexionSubmit",

    //Page admin
    "admin" => "admin",
 
    // Page de fil de publications une fois connecté
    "fil-nouvelles" => "filNouvelles",

    // POST de création d'une publication
    "publication/creation_submit" => "creationPublicationSubmit",

    // Page de modification d'une publication
    "publication/modifier" => "modifierPublication",
    
    // POST de modification d'une publication
    "publication/modifier_submit" => "modifierPublicationSubmit",


    // POST de supression d'une publication
    "publication/supprimer" => "suprimerPublicationSubmit",


    //Abonnement infolettre
    "abonnees" => "SubmitAbonnees",

    // supression abonnees
    "abonnees/supression" => "suprimerAbonnneesSubmit",




];
