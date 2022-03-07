<?php

$title = "Mon profil";
$css = "profil";

require_once('process/header.php');
require_once('process/profilManager.php');


?>

<main>

    <section>

        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <fieldset>

                <legend>Mon Compte</legend>


                    <label for="login">Pseudonyme</label>
                    <input id="login" name="login" type="text" placeholder="Pseudo actuel : <?= $res1[0]['login'] ?>" />



                    <label for="prenom">Prénom</label>
                    <input id="prenom" name="prenom" type="text" placeholder="Prénom actuel : <?= $res1[0]['prénom'] ?>" />

                    <label for="nom">Nom</label>
                    <input id="nom" name="nom" type="text" placeholder="Nom actuel : <?= $res1[0]['nom'] ?>" />

                    <label for="date">Date de Naissance: <?= $res1[0]['naissance'] ?></label>
                    <input id="date" type="date">

                    <label for="email">Email</label>
                    <input id="email" name="email" type="text" placeholder="Email actuel : <?= $res1[0]['email'] ?>" />


                    <label for="password">Ancien Mot de Passe</label>
                    <input id="password" name="old_password" value="" type="password" placeholder="Ancien mot de Passe" />


                    <label for="password">Nouveau Mot de Passe</label>
                    <input id="password" name="password" value="" type="password" placeholder="Nouveau mot de Passe" />



                    <label for="password">Confirmer Mot de Passe</label>
                    <input id="confirmer" name="confirm" value="" type="password" placeholder="Confirmation" />



                    <input type="submit" name="submit"  value="Modifier informations">
                    <input type="submit" name="delete" value="Supprimer Votre Compte">

                </div>

            </fieldset>

        </form>

    </section>

</main>

<?php require('process/footer.php'); ?>