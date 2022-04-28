<?php

$title = "Articles";
$css = "articles";

require('process/header.php');

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
                    <?= $category->categoryDropdown(); ?>
                </li>
            </ul>
        </nav>

        <section id="product-grid">

            <?php

            if(isset($_GET['category']) && !empty($_GET['category']) && !isset($_GET['sub_category'])) {

                $item->displayItems($item->getItemsbyCategory($_GET['category']));

                
            } else if (isset($_GET['sub_category']) && !empty($_GET['sub_category']) && !isset($_GET['category'])){

                $item->displayItems($item->getItemsbySubCategory($_GET['sub_category']));

            }
            
            else {

                $item->displayItems($item->getItems());

            }
            ?>
        </section>

    </body>

</main>


<?php

require('process/footer.php');

?>


