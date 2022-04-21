<?php

$title = "Articles";
$css = "articles";

require('process/header.php');
require('classes/Item.php');
require('classes/Category.php');

$item = new Item();
$category = new Category();

//Exécute l'action "add" pour mettre les objets dans le panier
include('process/ajouterArticles.php');

?>

<main>

    <body>

        <nav>
            <ul>
                <li><a href="articles.php">Tous nos articles</a></li>
                <li class="dropdown">
                    <?= $menu = $category->categoryDropdown(); ?>
                </li>
            </ul>
        </nav>

        <section id="product-grid">

            <?php

            $product_array = $item->getItems();

            if (!empty($product_array)) {

                foreach ($product_array as $key => $value) {

            ?>
                    <div class="product-item">

                        <form method="post" action="articles.php?action=add&code=<?= $product_array[$key]["code"]; ?>">

                            <div class="product-image"><img src="<?= $product_array[$key]["image"]; ?>"></div>

                            <div class="product-tile-footer">

                                <div class="product-title"><?= $product_array[$key]["name"]; ?></div>

                                <div class="product-price"><?= $product_array[$key]["price"] . "€"; ?></div>

                                <div class="cart-action">
                                    <input type="number" class="product-quantity" name="quantity" value="1" />
                                    <input type="submit" value="Add to Cart" class="btnAddAction" />
                                </div>

                            </div>

                        </form>

                    </div>

            <?php
                }
            }
            ?>
        </section>

    </body>

</main>

<?php

require('process/footer.php');

?>