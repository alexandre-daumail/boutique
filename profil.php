<?php

$title = "Mon profil";
$css = "profil";

require_once('process/header.php');

?>

<main>
    
    <form action="">
        
        <fieldset>

            <legend>Mon profil</legend>

            <label for="login">Pseudonyme</label>
            <input type="text" id="login" placeholder="Pseudo actuel: <?= $_SESSION['current_session']['user']['login'] ?>">

            <label for="civ">Civilité</label>
            <select name="civilite" id="civ">
                <optgroup label=" -- Choisissez une civilité -- ">
                    <option value="mme">Madame</option>
                    <option value="mr">Monsieur</option>
                </optgroup>
            </select>

            <label for="nom">Nom</label>
            <input type="text" id="nom" placeholder="Nom actuel: <?= $_SESSION['current_session']['user']['nom'] ?>">

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" placeholder="Prénom actuel: <?= $_SESSION['current_session']['user']['prénom'] ?>">

            <label for="birth">Date de naissance</label>
            <input type="date" id="birth">

            <button name="submit"></button>

        </fieldset>

    </form>

</main>

<?php require('process/footer.php'); ?>