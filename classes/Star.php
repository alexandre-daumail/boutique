<?php

class Star extends Dbh{

    // Récupérer la liste d'étoiles
    public function getStar()
    {
        $get = $this->DbHandler()->prepare("SELECT * FROM etoiles");

        $get->execute();

        $result = $get->fetchAll(PDO::FETCH_ASSOC);

        return $result;    
    }
}
