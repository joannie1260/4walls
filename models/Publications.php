<?php

require_once "bases/BaseModel.php";

class Publications extends BaseModel
{
    protected $table = "publications";


//----  creer publication  ----//
    public function creerPublication($episode, $titre, $description, $video, $date_publication, $duree)
    {
        $sql = "
            INSERT INTO
            $this->table (episode, titre, description, video, date_publication, duree)
            VALUES (:episode, :titre, :description, :video, :date_publication, :duree);
        ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":episode" => $episode,
            ":titre" => $titre,
            ":description" => $description,
            ":video" => $video,
            ":date_publication" => $date_publication,
            ":duree" => $duree,
        ]);

        return $success;
    }


//----  Supprimer publication  ----//

    public function supprimerPublication($id)
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
