<?php

$title = "Panneau Admin";
$css = "admin";

require('process/header.php');

if ($_SESSION['current_session']['user']['id_droit'] != 1337) {
    header('Location: index.php');
    exit;
}

$category = new Category();
require('process/deleteProcess.php');
test($_POST['id']);
?>

<main>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <fieldset>
            <legend>Suppression catégorie</legend>

            <p>En supprimant la catégorie, vous supprimez les sous-catégories et articles qui y sont liés.</p>
            <p>Confirmez vous cette opération?</p>
            <input type='text' name='id' value='<?= $_POST['id']?>' hidden>

            <input type="submit" name="cancel">Annuler</input>
            <input type="submit" name="delete_category">Supprimer catégorie</input>
            
    </form>
</main>

<?php require 'process/footer.php'; ?>