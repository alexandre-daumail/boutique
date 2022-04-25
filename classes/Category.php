<?php


class Category extends Dbh
{
    public function getCategories()
    {
        $sth = $this->DbHandler()->prepare("SELECT * FROM `categories` ");
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
}