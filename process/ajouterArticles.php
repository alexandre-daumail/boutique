<?php

//Module d'ajout au panier
if (!empty($_GET["action"])) {

    if (!empty($_POST["quantity"])) {

        $itemById = $item->getItemById($_GET["code"]);
        
        $itemArray = array($itemById[0]["id"] => array('name' => $itemById[0]["name"], 'id' => $itemById[0]["id"], 'quantity' => $_POST["quantity"], 'price' => $itemById[0]["price"]));

        if (!empty($_SESSION["cart_item"])) {

            if (in_array($itemById[0]["id"], array_keys($_SESSION["cart_item"]))) {

                foreach ($_SESSION["cart_item"] as $key => $value) {

                    if ($itemById[0]["id"] == $key) {

                        if (empty($_SESSION["cart_item"][$key]["quantity"])) {

                            $_SESSION["cart_item"][$key]["quantity"] = 0;

                        }

                        $_SESSION["cart_item"][$key]["quantity"] += $_POST["quantity"];

                    }

                }
            } else {

                $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);

            }

        } else {

            $_SESSION["cart_item"] = $itemArray;
            
        }
    }
}
