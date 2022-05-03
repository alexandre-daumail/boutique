<?php

class Order extends Dbh
{
    public function insertOrder($content, $totalPrice, $totalQuantity, $date, $user)
    {

        $sth = $this->DbHandler()->prepare("INSERT INTO orders(content, totalPrice, totalQuantity, date, id_user) VALUES(:content, :totalPrice, :totalQuantity, :date, :id_user)");

        $sth->execute([
            ':content' => $content, 
            ':totalPrice' => $totalPrice,
            ':totalQuantity' => $totalQuantity, 
            ':date' => $date, 
            ':id_user' => $user
        ]);

    }
}

?>