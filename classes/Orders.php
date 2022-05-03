<?php

class Order extends Dbh
{
    public function insertOrder($content, $totalPrice, $totalQuantity, $date, $code, $user)
    {

        $sth = $this->DbHandler()->prepare("INSERT INTO orders(content, totalPrice, totalQuantity, date, code, id_user) VALUES(:content, :totalPrice, :totalQuantity, :date, :code, :id_user)");

        $sth->execute([
            ':content' => $content, 
            ':totalPrice' => $totalPrice,
            ':totalQuantity' => $totalQuantity, 
            ':date' => $date, 
            ':code' => $code,
            ':id_user' => $user
        ]);

    }

    public function getOrder($id_user)
    {

        $sth = $this->DbHandler()->prepare("SELECT * FROM orders INNER JOIN utilisateurs ON orders.id_user = utilisateurs.id WHERE id_user = :id_user;");

        $sth->execute([':id_user' => $id_user]);

        $req = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $req;
    }

}

?>