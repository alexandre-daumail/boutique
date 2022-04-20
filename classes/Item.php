<?php


class Item extends Dbh
{

    public function creation($titre, $article, $id_utilisateur, $id_categorie)
    {

        $sth = $this->DbHandler()->prepare("INSERT INTO `articles`(`titre`,`article`,`id_utilisateur`,`id_categorie`,`date`) VALUES(?,?,?,?,?)");
        $date = new DateTime();
        $date->setTimestamp(time());
        $jour = $date->format('Y-m-d H:i:s');
        $sth->execute(array($titre, $article, $id_utilisateur, $id_categorie, $jour));

    }

    public function getItemById($id)
    {
        $sth = $this->DbHandler()->prepare("SELECT * FROM items  WHERE items.id = $id;");

        $sth->execute();

        $itemArray= $sth->fetchAll();

        return $itemArray;       
        
    }

    public function totalPages($id_categorie)
    {
        // On prépare la requête
        $query = $this->DbHandler()->prepare("SELECT COUNT(*) AS nb_articles FROM `items` where id_subcategory = IFNULL(:id_subcategory, id_subcategory)");
        $query->bindValue(':id_subcategory', $id_categorie, PDO::PARAM_INT);

        // On exécute
        $query->execute();

        // On récupère le nombre d'articles
        $result = $query->fetch();

        $nbArticles = (int) $result['nb_articles'];

        // On détermine le nombre d'articles par page
        $parPage = 10;

        // On calcule le nombre de pages total
        $pages = ceil($nbArticles / $parPage);

        return $pages;
    }

    //récupérer les articles en fonction de la pagination et de la catégorie
    public function getArticles(int $limit, $start, $category = '')
    {

        if (isset($category) && !empty($category)){

            $getItems = $this->DbHandler()->prepare("SELECT items.id, items.name, items.description, items.price, subcategory.id FROM items INNER JOIN subcategory on sub_category.id = items.id_subcategory AND items.id_categorie = :category ORDER BY date DESC LIMIT :start,5 ");

            $getItems->bindValue(':start', $start, PDO::PARAM_INT);
            $getItems->bindValue(':category', $category, PDO::PARAM_INT);
            
            $getItems->execute();
            
            $items = $getItems->fetchAll(PDO::FETCH_ASSOC);

            foreach ($items as $article) {
                                
                echo "<article><h2>" . $article["name"] . "</h2>";
            
                echo "<p>" . $article["description"] . "</p>";
            
                echo "<p>Prix : " . $article["price"] . "</p>";
                            
                echo "<button type='button'>Ajouter au panier</button>";
            
            }        
            
            return $items;
            
        } else {

            $getItems = $this->DbHandler()->prepare("SELECT items.id, items.name, items.description, items.price FROM items INNER JOIN sub_category on sub_category.id = items.id_subcategory LIMIT :start,:limit");

            $getItems->bindValue(':start', $start, PDO::PARAM_INT);
            $getItems->bindValue(':limit', $limit, PDO::PARAM_INT);
    
            // On exécute
            $getItems->execute();
    
            // On récupère les valeurs dans un tableau associatif
            $items = $getItems->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($items as $article) {
                                
                echo '<div class="product-item">
					<form method="post" action="articles.php?action=add&code=' .  $article["id"]  . '">
						<div class="product-tile-footer">
							<div class="product-title">' .  $article["name"]  . '</div>
							<div class="product-price"> Prix : '  . $article["price"] . '€</div>
							<div class="cart-action"><input type="number" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
						</div>
					</form>
				</div>';
            
            }        

            return $items;
    
        }
    }

    public function getList()
    {
        $getList = $this->DbHandler()->prepare("SELECT items.id, articles.titre, articles.date, utilisateurs.login, articles.id_categorie FROM articles INNER JOIN utilisateurs on utilisateurs.id = articles.id_utilisateur ORDER BY date DESC;");

        $getList->execute();

        $res = $getList->fetchAll(PDO::FETCH_ASSOC);

        return $res;

    }

    public function setCategorie( $id_categorie,$id_article)
    {
        $sth=$this->DbHandler()->prepare("UPDATE articles SET id_categorie = :category WHERE id = :id ");
        $sth->execute(array(':category' => $id_categorie, ':id' => $id_article));
    }

    public function deleteArticle($id_article)
    {
        $sth=$this->DbHandler()->prepare("DELETE FROM `articles` WHERE `articles`.`id` = :id");
        $sth->execute(array(':id' => $id_article));
    }


}