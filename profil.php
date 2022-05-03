<?php

$title = "Mon profil";
$css = "profil";

require_once('process/header.php');

if (!isset($_SESSION['current_session'])) {
    header('Location: index.php');
    exit;
}

require_once('process/profilManager.php');



?>

<main>

    <a href="commandes.php">Historique d'achats<img src="public/img/icon/ordering.jpg" alt="icône représentant le lien d'historique d'achats'" title="Mes Commandes"></a>
    
    <section>
    
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="1">

            <fieldset>

                <legend>Mon Compte</legend>


                    <label for="login">Pseudonyme</label>
                    <input id="login" name="login" type="text" placeholder="Pseudo actuel : <?= $_SESSION['current_session']['user']['login'] ?>" />



                    <label for="prenom">Prénom</label>
                    <input id="prenom" name="prenom" type="text" placeholder="Prénom actuel : <?= $_SESSION['current_session']['user']['prénom'] ?>" />

                    <label for="nom">Nom</label>
                    <input id="nom" name="nom" type="text" placeholder="Nom actuel : <?= $_SESSION['current_session']['user']['nom'] ?>" />

                    <label for="email">Email</label>
                    <input id="email" name="email" type="text" placeholder="Email actuel : <?= $_SESSION['current_session']['user']['email'] ?>" />


                    <label for="password">Ancien Mot de Passe</label>
                    <input id="password" name="old_password" value="" type="password" placeholder="Ancien mot de Passe" />


                    <label for="password">Nouveau Mot de Passe</label>
                    <input id="password" name="password" value="" type="password" placeholder="Nouveau mot de Passe" />



                    <label for="password">Confirmer Mot de Passe</label>
                    <input id="confirmer" name="confirm" value="" type="password" placeholder="Confirmation" />



                    <input type="submit" name="submit"  value="Modifier informations">
                    <input type="submit" name="delete" value="Supprimer Votre Compte">


                <h7>Dernière modification le : <?= $_SESSION['current_session']['user']['updated_at']; ?></h6>
            </fieldset>

        </form>

    </section>

    <aside>
    </aside>

</main>

<?php require('process/footer.php'); ?>