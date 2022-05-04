<?php


class Item extends Dbh
{
    public function getItems()
    {

        $sth = $this->DbHandler()->prepare("SELECT items.id, items.name,     items.price, items.image, items.code, sub_category.sub_category_name FROM items INNER JOIN sub_category ON sub_category.id = items.sub_category_id ORDER BY sub_category.sub_category_name ASC;");

        $sth->execute();

        $itemArray= $sth->fetchAll(PDO::FETCH_ASSOC);

        return $itemArray;       
        
    }

    public function getItemsbyCategory($id_category)
    {
        $sth = $this->DbHandler()->prepare("SELECT items.name, items.description, items.price, items.image, items.code, category.category_name FROM items INNER JOIN sub_category ON sub_category.id = items.sub_category_id INNER JOIN category ON category.id = sub_category.category_id WHERE category.id = :id_category;");

        $sth->execute([':id_category' => $id_category]);

        $itemArray= $sth->fetchAll();

        return $itemArray;
    }

    public function getItemsbySubCategory($id_sub_category)
    {
        $sth = $this->DbHandler()->prepare("SELECT items.name, items.description, items.price, items.image, items.code, sub_category.sub_category_name FROM items INNER JOIN sub_category ON sub_category.id = items.sub_category_id WHERE sub_category.id = :id_sub_category;");

        $sth->execute([':id_sub_category' => $id_sub_category]);

        $itemArray= $sth->fetchAll();

        return $itemArray;
    }


    public function getItemsbyCode($code)
    {

        $sth = $this->DbHandler()->prepare("SELECT * FROM items WHERE code = :code");

        $sth->execute([':code' => $code]);

        $itemArray= $sth->fetchAll(PDO::FETCH_ASSOC);

        return $itemArray;       
        
    }

    public function displayItems($product_array)
    {
        foreach ($product_array as $array) {
                
            echo '<form method="post" action="articles.php?action=add&code=' . $array["code"] . '">

                        <div class="product-image"><img src="' . $array["image"]. '"></div>

                        <div class="product-tile-footer">

                            <div class="product-title"><a href="article.php?code=' . $array["code"] . '">' . $array["name"]. '</a></div>

                            <div class="product-price">' . $array["price"] . '€ </div>

                            <div class="cart-action">
                                <input type="number" class="product-quantity" name="quantity" value="1" />
                                <input type="submit" value="Add to Cart" class="btnAddAction" />
                            </div>

                        </div>

                </form>';
        }

    }

    public function getList()
    {
        $getList = $this->DbHandler()->prepare("SELECT items.id, items.name, items.description, items, items.id_categorie FROM items INNER JOIN utilisateurs ON utilisateurs.id = articles.id_utilisateur;");

        $getList->execute();

        $res = $getList->fetchAll(PDO::FETCH_ASSOC);

        return $res;

    }

    public function setSubCategorie( $id_sub_categorie,$id_article)
    {
        $sth=$this->DbHandler()->prepare("UPDATE items SET sub_category_id = :sub_categorie WHERE id = :id ");
        $sth->execute(array(':sub_categorie' => $id_sub_categorie, ':id' => $id_article));
    }

    public function deleteItem($id_article)
    {
        $sth=$this->DbHandler()->prepare("DELETE FROM `items` WHERE id = :id");
        $sth->execute([':id' => $id_article]);
    }

    public function addItem($name, $description, $price, $sub_category_id, $code, $image)
    {

        $sth = $this->DbHandler()->prepare("INSERT INTO items(name, description, price, sub_category_id, code, image) VALUES(:name, :description, :price, :sub_category_id,:code, :image)");

        $sth->execute([
            ':name' => $name, 
            ':description' => $description, 
            ':price' => $price, 
            ':sub_category_id' => $sub_category_id, 
            ':code' => $code,
            ':image' => $image
        ]);

    }

    // public function searchItem()
    // {

    //     $sth = $this->DbHandler()->prepare("SELECT name FROM items BY id DESC");

    //     if(isset($_GET['search']) AND !empty($_GET['search'])) {
            
    //         $q = htmlspecialchars($_GET['search']);

    //         $sth = $this->DbHandler()->prepare("SELECT name FROM items WHERE name LIKE "%'.$q.'%" ORDER BY id DESC");

    //         if($sth->rowCount() == 0) {

    //             $sth = $this->DbHandler()->prepare("SELECT name FROM items WHERE CONCAT(name, description) LIKE "%'.$q.'%" ORDER BY id DESC");
    //         }
                
    //     }

    // }



}

?>





