<?php


class Category extends Dbh
{
    //récuperer les sous catégories affiliées à leurs catégories en vue de faire un menu
    public function categoryDropdown()
    {
        $query = $this->DbHandler()->prepare("SELECT name, id FROM category;");

        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $category) {

                echo '<li class="dropdown"><a href="javascript:void(0)" class="dropbtn">' . $category["name"] . '</a><div class="dropdown-content">';

                $query = $this->DbHandler()->prepare("SELECT name_sub FROM sub_category WHERE id_category = :id;");

                $query->execute([':id' => $category["id"]]);

                $result = $query->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $sub_category) {

                    foreach ($sub_category as $key => $value) {
                        echo '<a>' . $value . '</a>';
                    }
                }

                echo '</div></li>';

        }
    }
}