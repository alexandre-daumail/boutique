<?php

session_start();

require('classes/Dbh.php');
require('classes/User.php');
require('classes/Droits.php');
require('classes/Item.php');
require('classes/Category.php');
require('classes/SubCategory.php');
require('classes/Star.php');
require('classes/Offre.php');


function test($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/3434ebb08e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/<?= $css ?>.css">
    <link rel="stylesheet" href="public/css/footer.css">


    <title><?= $title ?></title>

</head>

<body>

    <header>

        <a href="index.php"><img src="public/img/logo-header.png" alt="logo du site Novashop"></a>

        <nav>

            <a href="index.php">Accueil<img src="public/img/logo2.png" alt="logo"></a>

            <a href="articles.php">Boutique<img src="public/img/logo2.png" alt="logo"></a>


            <?php

            if (isset($_SESSION['current_session']) && $_SESSION['current_session']['user']['id_droit'] == 1337) {
                echo '<a href="admin.php">Admin<img src="public/img/logo2.png" alt="logo"></a>';
            }

            ?>

            <!-- Lorque l'utilisateur est connecté, afficher les liens de compte utlisateur -->
            <?php

            if (isset($_SESSION['current_session']) && $_SESSION['current_session']['status'] == 1) {

            ?>

                <a href="profil.php">Profil
                <img src="public/img/logo2.png" alt="logo">
                </a>

                <a href="logout.php">Déconnexion
                <img src="public/img/logo2.png" alt="logo">
                </a>

            <?php

            } else {

            ?>
                <a href="inscription.php">Inscription
                <img src="public/img/logo2.png" alt="logo">
                </a>

                <a href="connexion.php">Connexion
                <img src="public/img/logo2.png" alt="logo">
                </a>

            <?php
            }

            ?>
            <a href="panier.php"><img src="public/img/icon/Vectorcart.png" alt="logo du panier" title="Panier"></a>

        </nav>

        <!-- <div class="search-area">

                <form class="searchbox" action="http://thecodeblock.com">
                    <input type="search" placeholder="Search" />
                    <button type="submit" value="search">&nbsp;</button>
                </form>

            </div> -->

    </header>