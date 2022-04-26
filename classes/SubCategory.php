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
}