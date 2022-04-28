<?php

$title = "Panneau Admin";
$css = "admin";

require('process/header.php');

if ($_SESSION['current_session']['user']['id_droit'] != 1337) {
    header('Location: index.php');
    exit;
}

$subCategorie = new SubCategory();
require('process/deleteProcess.php');

?>

<main>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <fieldset>
            <legend>Suppression de sous-catégorie</legend>

            <p>En supprimant la sous-catégorie, vous supprimez les articles qui y sont liés.</p>
            <p>Confirmez vous cette opération?</p>
            <input type='text' name='id' value='<?= $_POST['id']?>' hidden>

            <input type="submit" name="cancel">Annuler</input>
            <input type="submit" name="delete_sub_categorie">Supprimer sous-catégorie</input>
            
    </form>
</main>

<?php require 'process/footer.php'; ?>