<?php

require_once "bases/BaseModel.php";

class Utilisateurs extends BaseModel
{

    protected $table = "utilisateurs";

    public function creer($prenom, $nom, $courriel, $mot_de_passe = null)
    {
        $sql = "
            INSERT INTO $this->table (prenom, nom, courriel, mot_de_passe)
            VALUES (:prenom, :nom, :courriel, :mot_de_passe);
        ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":courriel" => $courriel,
            ":mot_de_passe" => $mot_de_passe,
        ]);

        return $success;
    }

    //Validation connexion utilisateur
    
    public function verifierConnexion($courriel, $mdp)
    {
        // Trouve le mot de passe ENCRYPTER du user dans la BDD avec le courriel fourni
        $sql = "
            SELECT id, mot_de_passe
            FROM $this->table
            WHERE courriel = :courriel
        ";

        $stmt = $this->pdo()->prepare($sql);

        $stmt->execute([
            ":courriel" => $courriel,
        ]);

        $entree = $stmt->fetch();

        // // Si on trouve un utilisateur avec le courriel
        if ($entree != false) {
            // Vérifier si le mdp encrypter corresponds au mot de passe fourni lors de la connexion
          $mot_passe_ok = password_verify($mdp, $entree["mot_de_passe"]);


            if ($mot_passe_ok) {
                $_SESSION["utilisateur_id"] = $entree["id"];
                return true;
            } else {
                return false;
            }
        } else {
            // Le email n'existe pas dans la BDD
            return false;
        }
    }


    public function supprimer($prenom, $nom, $courriel, $mot_de_passe = null)
    {
        $sql = "
            DELETE INTO $this->table (prenom, nom, courriel, mot_de_passe)
            VALUES (:prenom, :nom, :courriel, :mot_de_passe);
        ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":courriel" => $courriel,
            ":mot_de_passe" => $mot_de_passe,
        ]);

        return $success;
    }
    
}
