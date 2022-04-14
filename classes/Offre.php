<?php



class Offre extends Dbh
{
    // Récupere toutes les info d'une catégorie
    public function topOffre()
    {
        $sth = $this->DbHandler()->prepare("SELECT * FROM `offres` WHERE topOffre = 1 ");
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);

        foreach ($res as $offre){

            echo "<div class='card'>

            <img src='./public/img/NOVA SHOP.png'>

            <p>" . $offre["description"] . "</p>
            
            <span>
                <p>" . $offre["prix"] . "€</p>
            </span>

            <a href='certificate.php'>Acheter maintenant</a>

            </div>";
        }
        
    }

    public function getAllInfoById($id)
    {
        $sth = $this->DbHandler()->prepare("SELECT * FROM `categories` WHERE `id` = :id");

        $sth->execute(array(':id' => $id));

        $categorie = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $categorie;
    }

    public function getid($nom)
    {
        $sth=$this->DbHandler()->prepare("SELECT `id` FROM `categories` WHERE nom='$nom'");
        $sth->execute();
        $res=$sth->fetchAll(PDO::FETCH_ASSOC);
        return$res;
    }


    public function getCategoriesByName($name)
    {
        $sth=$this->DbHandler()->prepare("SELECT * FROM `categories` WHERE `nom` = '$name'");
        $sth->execute();
        $res=$sth->fetch();
        return $res;
    }

    public function updateAdmin($nom,$get)
    {
        $sth=$this->DbHandler()->prepare("UPDATE `categories` SET `nom` =? WHERE `id` = $get ");
        $sth->execute(array($nom));
        echo"<p> Votre Catégorie a bien été modifié</p>";
    }

    public function createCategories($nom)
    {
        $sth=$this->DbHandler()->prepare("INSERT INTO `categories`(`nom`) VALUES (?)");
        $sth->execute(array($nom));
        echo "<p>Nouvelle Catégorie bien enregistrer/p>";
    }

    // Supprimer la catégorie sélectionnée
    public function deleteCategorie($id_categorie)
    {
        $sth=$this->DbHandler()->prepare("DELETE FROM `categories` WHERE `categories`.`id` = :id");
        $sth->execute(array(':id' => $id_categorie));
    }


    
}