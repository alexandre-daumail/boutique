<?php


class Item extends Dbh
{
    public function getItems()
    {

        $sth = $this->DbHandler()->prepare("SELECT * FROM items ORDER BY id ASC");

        $sth->execute();

        $itemArray= $sth->fetchAll();

        return $itemArray;       
        
    }

    public function getItemsbyCategory($id_category)
    {
        $sth = $this->DbHandler()->prepare("SELECT items.name, items.description, items.price, items.image, items.code, category.category_name FROM items INNER JOIN sub_category ON sub_category.id = items.subcategory_id INNER JOIN category ON category.id = sub_category.category_id WHERE category.id = :id_category;");

        $sth->execute([':id_category' => $id_category]);

        $itemArray= $sth->fetchAll();

        return $itemArray;
    }

    public function getItemsbySubCategory($id_sub_category)
    {
        $sth = $this->DbHandler()->prepare("SELECT items.name, items.description, items.price, items.image, items.code, sub_category.sub_category_name FROM items INNER JOIN sub_category ON sub_category.id = items.subcategory_id WHERE sub_category.id = :id_sub_category;");

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
                
            echo '<div class="product-item">

                    <form method="post" action="articles.php?action=add&code=' . $array["code"] . '">

                        <div class="product-image"><img src="' . $array["image"]. '"></div>

                        <div class="product-tile-footer">

                            <div class="product-title">' . $array["name"]. '</div>

                            <div class="product-price">' . $array["price"] . '€ </div>

                            <div class="cart-action">
                                <input type="number" class="product-quantity" name="quantity" value="1" />
                                <input type="submit" value="Add to Cart" class="btnAddAction" />
                            </div>

                        </div>

                    </form>

                </div>';
        }

    }

    public function getList()
    {
        $getList = $this->DbHandler()->prepare("SELECT articles.id, articles.titre, articles.date, utilisateurs.login, articles.id_categorie FROM items INNER JOIN utilisateurs on utilisateurs.id = articles.id_utilisateur ORDER BY date DESC;");

        $getList->execute();

        $res = $getList->fetchAll(PDO::FETCH_ASSOC);

        return $res;

    }

}