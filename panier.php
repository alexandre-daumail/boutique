<?php

$title = "Mon Panier";
$css = "panier";

require('process/header.php');

?>

<main>

    <?php
    if (isset($_SESSION["cart_item"])) {
        $total_quantity = 0;
        $total_price = 0;
    ?>

        <table>

            <thead>

                <tr>
                    <th>Désignation</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Sous-Total</th>
                    <th>Supprimer</th>
                </tr>

            </thead>

            <tbody>

                <tr>

                    <?php

                    foreach ($_SESSION["cart_item"] as $item) {

                        $item_price = $item["quantity"] * $item["price"];
                    ?>

                        <td><img src="<?= $item["image"]; ?>" /><?= $item["name"]; ?></td>
                        <td><?= $item["price"]; ?></td>
                        <td><?= $item["quantity"]; ?></td>
                        <td><?= "€ " . number_format($item_price, 2); ?></td>
                        <td><a href="panier.php?action=remove&code=<?= $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>

                    <?php
                        $total_quantity += $item["quantity"];
                        $total_price += ($item["price"] * $item["quantity"]);
                    }
                    ?>

                </tr>

                <tr>

                    <td colspan="2">Total:</td>
                    <td><?php echo $total_quantity; ?></td>
                    <td colspan="2"><strong><?php echo "$ " . number_format($total_price, 2); ?></strong></td>
                    <td></td>
                    
                </tr>

            </tbody>

        </table>

    <?php
    } else {

        echo '<p>Votre panier est vide</p>'; 

    }

    ?>

</main>