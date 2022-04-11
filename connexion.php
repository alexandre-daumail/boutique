<?php

$title = "Connexion";
$css = "authenticate";

require_once('process/header.php');
require_once('process/Login.php');

if (isset($_POST['signup']) && count($_POST) > 0) {
    $process = Signup($_POST);
}

if (isset($_POST['connect']) && count($_POST) > 0) {
    $process = Login($_POST);
}

?>

<main>

    
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >

        <fieldset>

            <legend>Connexion</legend>

            <?= isset($process['error']['login']) ? "<p><b>Oops</b>," . $process['error']['login'] . "</p>" : "" ?>

            <label for="6">Identifiant</label>

            <input type="text" name="login_connect" id="6" placeholder="Login ou Email" required>

            <label for="7">Mot de Passe</label>

            <input type="password" name="pwd_connect" id="7" placeholder="Mot de passe" required>

            <button type="submit" name="connect" >Se connecter</button>

        </fieldset>

    </form>

</main>

<?php
$process = [];
require_once('process/footer.php');
?>