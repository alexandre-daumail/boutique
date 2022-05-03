<?php

if (!empty($_GET["action"])) {

    switch ($_GET["action"]) {

        case "remove":
			if (!empty($_SESSION["cart_item"])) {
				foreach ($_SESSION["cart_item"] as $key => $value) {
					if ($_GET["code"] == $key)
						unset($_SESSION["cart_item"][$key]);
						header("Location: panier.php");

					if (empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
						header("Location: panier.php");
				}
			}
			break;
		case "empty":
			unset($_SESSION["cart_item"]);
			header("Location: panier.php");

			break;
    }
}
