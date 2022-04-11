<?php

session_start();

require('classes/Dbh.php');

function test($var){
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

        <section class="logo-area">
            <img id="logo-header" src="public/img/logo-header.png" alt="logo-header">
        </section>
        <section class="search-button-area">
            
            <div class="button-area">
                <div class="under-button">
                    <a href="index.php">Accueil</a>
                    <img id="under-button" src="public/img/under-button.png" alt="logo">
                </div>
                <div class="under-button">
                    <a href="apropos.php">Information</a>
                    <img id="under-button" src="public/img/under-button.png" alt="logo">
                </div>
                <div class="under-button">
                    <a href="stars.php">Nos Étoiles</a>
                    <img id="under-button" src="public/img/under-button.png" alt="logo">
                </div>
                <div class="under-button">
                    <a href="offres.php">Nos Offres</a>
                    <img id="under-button" src="public/img/under-button.png" alt="logo">

                </div>
                <div class="under-button">
                    <a href="contact.php">Nous Contacter</a>
                    <img id="under-button" src="public/img/under-button.png" alt="logo">

                </div>

            </div>

            <div class="icon-header">
                
                <a href="panier.php"><img id="icon-header" src="public/img/icon/Vectorcart.png" alt="logo du panier" ></a>
                
                <!-- Lorque l'utilisateur est connecté, afficher les liens de compte et de ses favoris -->
                <?= isset($_SESSION['current_session']) && $_SESSION['current_session']['status'] == 1 ? '<a href="account.php"><img id="icon-header" src="public/img/icon/Vectoraccount.png" alt="logo-myaccount"></a><a href="favorites.php"><img id="icon-header" src="public\img\icon\fav.png" alt="logo des favoris" title="Vos étoiles favorites"></a><a href="logout.php"><img id="icon-header" src="public/img/icon/logout.png" alt="logout logo"></a>' : '<a href="inscription.php">Inscription</a><a href="connexion.php">Connexion</a>' ;?>

            </div>
            <!-- <div class="search-area">

                <form class="searchbox" action="http://thecodeblock.com">
                    <input type="search" placeholder="Search" />
                    <button type="submit" value="search">&nbsp;</button>
                </form>

            </div> -->

        </section>

        <section class="logo-area">
            <img id="logo-header" src="public/img/logo-header.png" alt="logo-header">
        </section>

    </header>