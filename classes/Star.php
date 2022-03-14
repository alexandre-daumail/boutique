<?php

class Star extends Dbh{

    // Récupérer la liste d'étoiles
    public function getStars($start)
    {
        $get = $this->DbHandler()->prepare("SELECT * FROM stars LIMIT :start,25 ");

            $get->bindValue(':start', $start, PDO::PARAM_INT);
            
            $get->execute();
            
            $stars = $get->fetchAll(PDO::FETCH_ASSOC);

            foreach ($stars as $star) {
                                
                echo "<tr><td>" . $star["reference"] . "</td>";
            
                echo "<td>" . $star["coordonnees"] . "</td>";
            
                echo "<td>" . $star["constellation"] . "</td>";

                echo "<td>" . $star["nom"] . "</td></tr>";
                                    
            }    
    }

    public function totalPages()
    {
        // On prépare la requête
        $query = $this->DbHandler()->prepare("SELECT COUNT(*) AS nb_etoiles FROM `stars`");

        // On exécute
        $query->execute();

        // On récupère le nombre d'étoiles
        $result = $query->fetch();

        $nb_etoiles = (int) $result['nb_etoiles'];

        // On détermine le nombre d'étoiles par page
        $parPage = 25;

        // On calcule le nombre de pages total
        $pages = ceil($nb_etoiles / $parPage);

        return $pages;
    }

}
