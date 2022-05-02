<?php

$title = "Mon Panier";
$css = "panier";

require('process/header.php');

require('process/actionsPanier.php');

?>

<main>
    <div id="shopping-cart">

        <div class="txt-heading">Votre Panier</div>

        <a id="btnEmpty" href="panier.php?action=empty">Vider le panier</a>
        <?php
        if (isset($_SESSION["cart_item"])) {
            $total_quantity = 0;
            $total_price = 0;
        ?>
            <table class="tbl-cart" cellpadding="10" cellspacing="1">

                <tbody>

                    <tr>
                        <th style="text-align:left;">Code</th>
                        <th style="text-align:left;">Article</th>
                        <th style="text-align:right;" width="5%">Quantité</th>
                        <th style="text-align:right;" width="10%">Prix unitaire</th>
                        <th style="text-align:right;" width="10%">Sous-total</th>
                        <th style="text-align:center;" width="5%">Supprimer article(s)</th>
                    </tr>

                    <?php

                    foreach ($_SESSION["cart_item"] as $item) {

                        $item_price = $item["quantity"] * $item["price"];

                    ?>

                        <tr>
                            <td><img src="<?= $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
                            <td><?php echo $item["code"]; ?></td>
                            <td style="text-align:right;"><?= $item["quantity"]; ?></td>
                            <td style="text-align:right;"><?= $item["price"] . " €"; ?></td>
                            <td style="text-align:right;"><?= number_format($item_price, 2) . " €"; ?></td>

                            <td style="text-align:center;">
                                <a href="panier.php?action=remove&code=<?= $item["code"]; ?>" class="btnRemoveAction">
                                    <img src="public/img/icon/icon-delete.png" alt="Retirer article" />
                                </a>
                            </td>

                        </tr>

                    <?php
                        $total_quantity += $item["quantity"];
                        $total_price += ($item["price"] * $item["quantity"]);
                    }
                    ?>

                    <tr>
                        <td colspan="2" align="right">Total:</td>
                        <td align="right"><?= $total_quantity; ?></td>
                        <td align="right" colspan="2"><strong><?= "$ " . number_format($total_price, 2); ?></strong></td>
                        <td></td>
                    </tr>

                </tbody>

            </table>

            <?php

            if (!isset($_SESSION['current_session'])) {
                echo "<p> Veuillez vous <a href='inscription.php'>inscrire</a> et vous <a href='connexion.php'>connecter</a> afin de passer commande.</p>";
            } else {
                echo "<a href='checkout.php'>Commander</a>";
            }

        } else {
            ?>

            <div class="no-records">Votre panier est vide</div>

        <?php
        }
        ?>
    </div>

</main>

<?php

require('process/footer.php');

?>