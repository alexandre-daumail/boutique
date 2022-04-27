<?php


class Category extends Dbh
{
    public function getCategories()
    {
        $sth = $this->DbHandler()->prepare("SELECT * FROM `category` ");
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    //récuperer les sous catégories affiliées à leurs catégories en vue de faire un menu
    public function categoryDropdown()
    {
        $query = $this->DbHandler()->prepare("SELECT category_name, id FROM category;");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $category) {

            echo '<li class="dropdown"><a href="articles.php?category='.$category['id'].'" class="dropbtn">' . $category["category_name"] . '</a><div class="dropdown-content">';

            $query = $this->DbHandler()->prepare("SELECT sub_category_name, id FROM sub_category WHERE category_id = :id;");
            $query->execute([':id' => $category["id"]]);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $sub_category) {

                echo '<a href="articles.php?sub_category=' . $sub_category["id"] . '">' . $sub_category["sub_category_name"] . '</a>';
                
            }

            echo '</div></li>';

        }
    }

    public function getCategoryById ($id) {

        $query = $this->DbHandler()->prepare("SELECT category_name FROM category WHERE id = :id;");
        $query->execute(["id" => $id]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function newCategory ($category_name) {

        $query = $this->DbHandler()->prepare("INSERT INTO `category` (`category_name`) VALUES (:category_name);");
        $query->execute([":category_name" => $category_name]);
    
    }

    public function setCategory ($id, $category_name) {

        $query = $this->DbHandler()->prepare("UPDATE `category` SET `category_name` = :category_name WHERE `category`.`id` = :id;");
        $query->execute([":id" => $id, ":category_name" => $category_name]);
    
    }

    // Supprimer la catégorie sélectionnée
    public function deleteCategory($id_categorie)
    {
        $sth=$this->DbHandler()->prepare("DELETE FROM `category` WHERE `category`.`id` = :id");
        $sth->execute(array(':id' => $id_categorie));
    }
    
}