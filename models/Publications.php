<?php

require_once "bases/BaseModel.php";

class Publications extends BaseModel
{
    protected $table = "publications";

    public function creer($titre, $description, $image, $video, $date_publication)
    {
        $sql = "
            INSERT INTO
            $this->table (titre, description, image, video, date_publication)
            VALUES (:titre, :description, :image, :video, :date_publication);
        ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":titre" => $titre,
            ":description" => $description,
            ":image" => $image,
            ":video" => $video,
            ":date_publication" => $date_publication,
        ]);

        return $success;
    }


    public function tousActivites(){

        // $sql = "
        //     SELECT 
        //         $this->table.*,
        //         $this->table1.nom AS categorie_nom
        //     FROM $this->table
        //     INNER JOIN $this->table1
        //     ON activites.fk_categorie_id = categories.id
        //     ";

        //     $stmt = $this->pdo()->prepare($sql);
        //     $stmt->execute([]);
        //     return $stmt->fetchAll();
    }       

    /**
     * Similaire à la fonction tous() du BaseModel, mais avec la table utilisateur liée
     */
    public function tousAvecUtilisateur()
    {
        $sql = "
            SELECT
                $this->table.*,
                utilisateurs.prenom,
                utilisateurs.nom
            FROM $this->table
            INNER JOIN utilisateurs ON fk_utilisateur_id = utilisateurs.id
        ";

        $stmt = $this->pdo()->prepare($sql);
        $stmt->execute([]);
        return $stmt->fetchAll();
    }

    
    public function supprimer($id)
    {
        $sql = "
            DELETE FROM
            $this->table*
            VALUES (:nom, :fk_categorie_id, :image);
        ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":nom" => $nom,
            ":fk_categorie_id" => $fk_categorie_id,
            ":image" => $image,
        ]);

        return $success;
    }
}
