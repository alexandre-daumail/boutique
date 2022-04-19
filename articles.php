<?php

$title = "Articles";
$css = "article";
require('process/header.php');
require('classes/Item.php');
$item = new Item();

if (!empty($_GET["action"])) {

    if (!empty($_POST["quantity"])) {

        $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
        
        $itemArray = array($productByCode[0]["code"] => array('name' => $productByCode[0]["name"], 'code' => $productByCode[0]["code"], 'quantity' => $_POST["quantity"], 'price' => $productByCode[0]["price"], 'image' => $productByCode[0]["image"]));

        if (!empty($_SESSION["cart_item"])) {

            if (in_array($productByCode[0]["code"], array_keys($_SESSION["cart_item"]))) {

                foreach ($_SESSION["cart_item"] as $k => $v) {

                    if ($productByCode[0]["code"] == $k) {

                        if (empty($_SESSION["cart_item"][$k]["quantity"])) {

                            $_SESSION["cart_item"][$k]["quantity"] = 0;

                        }

                        $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];

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

?>

<main>

    <?php
    // On détermine sur quelle page on se trouve
    if (isset($_GET['start']) && !empty($_GET['start'])) {

        $currentPage = (int) strip_tags($_GET['start']);

        if (isset($_GET['categorie']) && !empty($_GET['categorie'])) {

            // Calcul du 1er article de la page
            $start = $currentPage * 5 - 5;

            $categories = $categorie->getAllInfoById($_GET['categorie']);

            echo "<h1>" . $categories[0]['nom'] . "</h1>";

            $item = $item->getArticles(5, $start, $_GET['categorie']);
        } else {

            $currentPage = (int) strip_tags($_GET['start']);

            $start = $currentPage * 5 - 5;

            echo "<h1>Articles les plus récents</h1>";

            $item = $item->getArticles(5, $start, '');
        }
    } else {

        $currentPage = 1;

        if (isset($_GET['categorie']) && !empty($_GET['categorie'])) {

            $categories = $categorie->getAllInfoById($_GET['categorie']);

            echo "<h1>" . $categories[0]['nom'] . "</h1>";

            $item = $item->getArticles(5, 0, $_GET['categorie']);
        } else {

            echo "<h1>Articles les plus récents</h1>";

            $item = $item->getArticles(5, 0);
        }
    }

    ?>

    <nav>

    </nav>

</main>

<?php

require('process/footer.php');

?>