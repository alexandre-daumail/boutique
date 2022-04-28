<?php

$title = "Ajouter un article";
$css = "add";
require('process/header.php');

if ($_SESSION['current_session']['user']['id_droit'] != 1337) {

    header('Location: index.php');
    exit;
}

$subCategory = new SubCategory();
$insert = new Item();

$getSubCategories = $subCategory->getSubCategories();


if (isset($_POST['submit'])) {

    if (empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']) || empty($_POST['sub_category_id'])) {

        echo "<p> Veuillez remplir tout les champs</p>";
    } else {

        //create a random 7 characters code
        function randomCode() {

            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $code = [];
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            
            for ($i = 0; $i < 7; $i++) {

                $n = rand(0, $alphaLength);
                $code[] = $alphabet[$n];
            }

            return implode($code); //turn the array into a string

        }

        $code = randomCode();
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "public/img/".$filename;

        $insert->addItem($_POST['name'], $_POST['description'], $_POST['price'], $_POST['sub_category_id'], $code, $filename);

        if (move_uploaded_file($tempname, $folder)) {
			echo "Image uploaded successfully";
		}else{
			echo "Failed to upload image";
	    }
        echo "<p>Votre article est correctement enregistré</p>";
    }
}

?>

<main>

    <section class="containerA">

        <h1>Ajouter un article à la boutique</h1>

        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" class="articlecreate">

            <div class="containerA1">

                <label for="sub_category">Sous-Catégorie</label>
                <select id="sub_category" name="sub_category_id" >

                    <option>-- Choisir une sous-catégorie --</option>';

                    <?php
                    for ($i = 0; isset($getSubCategories[$i]); $i++) {
                        echo "<option value='" . $getSubCategories[$i]['id'] . "'>" . $getSubCategories[$i]['sub_category_name'] . '</option>';
                    }
                    ?>
                </select>

                <label for="titre">Nom de l'article</label>

                <input name="name" type="text" placeholder="Entrer un nom">

                <label for="price">Prix de l'article (en €)</label>

                <input name="price" type="number" min="1" placeholder="prix">

            </div>

            <div class="containerA2">

                <label for="article">Description</label>
                <textarea id="article" name="description" rows="20" cols="40" placeholder="Description de l'article"></textarea>

                <input type="file" name="uploadfile" value="Choisir un fichier" />

                <input type="submit" name="submit" value="Envoyer">

            </div>

  
        </form>

    </section>

</main>

<?php include('process/footer.php');  ?>