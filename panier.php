<?php

$title = "Mon Panier";
$css = "panier";
require('process/header.php');
test($_SESSION["cart_item"]);
if (!empty($_GET["action"])) {

    switch ($_GET["action"]) {

        case "remove":  
        
            if (!empty($_SESSION["cart_item"])) {

                foreach ($_SESSION["cart_item"] as $key => $value) {
                    if ($_GET["code"] == $key)
                        unset($_SESSION["cart_item"][$key]);
                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                }
            
            }
            break;
            
        case "empty":
			unset($_SESSION["cart_item"]);
			break;
    }
}
?>

<main>
<div id="shopping-cart">
		<h1>Votre Panier</h1>

		<a id="btnEmpty" href="panier.php?action=empty">Vider le panier</a>
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

                

                    <?php

                    foreach ($_SESSION["cart_item"] as $item) {

                        $item_price = $item["quantity"] * $item["price"];
                    ?>
<tr>
                        <td><?= $item["name"]; ?></td>
                        <td><?= $item["price"]; ?>€</td>
                        <td><?= $item["quantity"]; ?></td>
                        <td><?= number_format($item_price, 2); ?>€</td>
                        <td><a href="panier.php?action=remove&code=<?= $item["id"]; ?>" class="btnRemoveAction"></a></td>
                        <td style="text-align:center;"><a href="panier.php?action=remove&code=<?= $item["id"]; ?>" class="btnRemoveAction"><img src="public\img\icon\icon-delete.png" alt="Remove Item" /></a></td>
                        </tr>
                    <?php
                        $total_quantity += $item["quantity"];
                        $total_price += ($item["price"] * $item["quantity"]);
                    }
                    ?>

              

                <tr>

                    <td colspan="2">Total:</td>
                    <td><?= $total_quantity; ?></td>
                    <td colspan="2"><strong><?= number_format($total_price, 2); ?>€</strong></td>
                    <td></td>
                    
                </tr>

            </tbody>

        </table>

    <?php
    } else {

        echo '<p>Votre panier est vide</p>'; 

    }

    ?>
</div>

</main>

<?php

require('process/footer.php');

?>