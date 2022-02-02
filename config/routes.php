<?php
// Liste d'url accessibles par le navigateur

/*
Format:
url => méthode du controlleur
 */

$routes = [
    // Page d'accueil
    "accueil" => "accueil",

    //open video section 
    "video" => "video",

    //Page connexion
    "connexion"=> "formConnexion",

    //Page entreprise
    "entreprise"=> "entreprise",


    // POST de connexion
    "compte/acces" => "connexionSubmit",

    // Page de fil de publications une fois connecté
    "fil-nouvelles" => "filNouvelles",

    // POST de création d'une publication
    "publication/creation_submit" => "creationPublicationSubmit",

    "publication/supprimer" => "suprimerPublicationSubmit",

];
