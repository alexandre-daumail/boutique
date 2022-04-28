<?php

$title = "Ajouter un article";
$css = "add";
require('process/header.php');

if ($_SESSION['current_session']['user']['id_droit'] != 1337) {

    header('Location: index.php');
    exit;
}

$subCategory = new SubCategory();

$getSubCategories = $subCategory->getSubCategories();


if (isset($_POST['submit'])) {

    if (empty($_POST['titre']) || empty($_POST['article']) || empty($_POST['categories'])) {

        echo "<p> Veuillez remplir tout les champs</p>";
    } else {

        $id_categories = $_POST['categories'];

        $insert = new Item();

        $insert->addItem($_POST['titre'], $_POST['article'], $_SESSION['id'], $_POST['categories']);

        echo "<p>Votre article est correctement enregistré</p>";
    }
}

?>

<main>

    <section class="containerA">

        <h1>Ajouter un article à la boutique</h1>

        <form action="" method="POST" class="articlecreate">

            <div class="containerA1">

                <label for="categories">Sous-Catégorie</label>
                <select name="categories" id="categories">

                    <option>-- Choisir une sous-catégorie --</option>';

                    <?php
                    for ($i = 0; isset($getSubCategories[$i]); $i++) {
                        echo "<option value='" . $getSubCategories[$i]['id'] . "'>" . $getSubCategories[$i]['sub_category_name'] . '</option>';
                    }
                    ?>
                </select>

                <label for="titre">Nom de l'article</label>

                <input name="titre" type="text" placeholder="Entrer un nom">

                <label for="price">Prix de l'article</label>

                <input name="price" type="number" min="1" placeholder="prix">
                <label for="price">€</label>

            </div>

            <div class="containerA2">

                <label for="article">Description</label>
                <textarea id="article" name="article" placeholder="Description de l'article" rows="20" cols="40"></textarea>

                <input type="submit" name="submit" value="Envoyer">

            </div>

        </form>

        <form action="/action_page.php">
            <label for="myfile">Choisir une image:</label>
            <input type="file" id="myfile" name="myfile">
            <input type="submit" value="upload">
        </form>

    </section>

</main>

<?php include('process/footer.php');  ?>