<?php

class SubCategory extends Dbh
{
    public function getSubCategories()
    {
        $sth = $this->DbHandler()->prepare("SELECT * FROM sub_category");
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getSubCategoryById ($id) {

        $query = $this->DbHandler()->prepare("SELECT sub_category_name FROM sub_category WHERE id = :id;");
        $query->execute(["id" => $id]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function newSubCategory ($name, $category_id) {

        $query = $this->DbHandler()->prepare("INSERT INTO `sub_category` ( `sub_category_name`, `category_id`) VALUES (:name, :category_id);");
        $query->execute([":name" => $name, ':category_id' => $category_id]);
    
    }

    public function setSubCategory ($id, $sub_category_name) {

        $query = $this->DbHandler()->prepare("UPDATE `sub_category` SET `sub_category_name` = :sub_category_name WHERE `sub_category`.`id` = :id;");
        $query->execute([":id" => $id, ":sub_category_name" => $sub_category_name]);
    
    }

    // Supprimer la catégorie sélectionnée
    public function deleteSubCategory($id_sub_categorie)
    {
        $sth = $this->DbHandler()->prepare("DELETE FROM `sub_category` WHERE `sub_category`.`id` = :id");
        $sth->execute(array(':id' => $id_sub_categorie));
    }

}