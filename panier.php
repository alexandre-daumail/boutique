<?php

$title = "Mon Panier";
$css = "panier";

require('process/header.php');

require('process/actionsPanier.php');

?>

<main>
<div id="shopping-cart">
		<div class="txt-heading">Shopping Cart</div>

		<a id="btnEmpty" href="panier.php?action=empty">Empty Cart</a>
		<?php
		if (isset($_SESSION["cart_item"])) {
			$total_quantity = 0;
			$total_price = 0;
		?>
			<table class="tbl-cart" cellpadding="10" cellspacing="1">
				<tbody>
					<tr>
						<th style="text-align:left;">Name</th>
						<th style="text-align:left;">Code</th>
						<th style="text-align:right;" width="5%">Quantity</th>
						<th style="text-align:right;" width="10%">Unit Price</th>
						<th style="text-align:right;" width="10%">Price</th>
						<th style="text-align:center;" width="5%">Remove</th>
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
							<td style="text-align:right;"><?= number_format($item_price, 2). " €"; ?></td>

							<td style="text-align:center;">
                                <a href="panier.php?action=remove&code=<?= $item["code"]; ?>" class="btnRemoveAction">
                                    <img src="icon-delete.png" alt="Remove Item" />
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
		} else {
		?>
			<div class="no-records">Your Cart is Empty</div>
		<?php
		}
		?>
	</div>

</main>

<?php

require('process/footer.php');

?>