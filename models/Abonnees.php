<?php

require_once "bases/BaseModel.php";

class Abonnees extends BaseModel
{
    protected $table = "abonnees";

    // Création abonnee
    public function creerAbonnee($email)
    {
        $sql = "
            INSERT INTO
            $this->table (email)
            VALUES (:email);
        ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":email" => $email
        ]);

        return $success;
    } 

    // Supression abonnee

    public function supprimerAbonnees($id)
    {
        
        $sql = "
            DELETE FROM
            $this->table
            WHERE id = :id;
        ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":id" => $id
           
        ]);

        return $success;
    }

    
}
