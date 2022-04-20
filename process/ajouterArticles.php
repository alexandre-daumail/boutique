<?php

//Module d'ajout d'aticles au panier
if (!empty($_GET["action"])) {

    if (!empty($_POST["quantity"])) {

        $itemByCode = $item->getItemsbyCode($_GET["code"]);

        $itemArray = array($itemByCode[0]["code"] => array('name' => $itemByCode[0]["name"], 'code' => $itemByCode[0]["code"], 'quantity' => $_POST["quantity"], 'price' => $itemByCode[0]["price"], 'image' => $itemByCode[0]["image"]));

        if (!empty($_SESSION["cart_item"])) {
            
            if (in_array($itemByCode[0]["code"], array_keys($_SESSION["cart_item"]))) {
                
                foreach ($_SESSION["cart_item"] as $key => $value) {
                    
                    if ($itemByCode[0]["code"] == $key) {
                        
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
