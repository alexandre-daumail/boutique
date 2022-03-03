<?php

session_start();

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
            <img src="public/img/logo-header.png" alt="logo-header">
        </section>
        <section class="search-button-area">


            <div class="button-area">
                <div>
                    <nav>
                        <ul>
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="#">Informations</a></li>
                            <li><a href="#">Nos Étoiles</a></li>
                            <li><a href="articles.php">Nos Offres</a></li>
                        </ul>
                    </nav>

                </div>
                <div class="under-button">
                    <img id="under-button" src="public/img/under-button.png" alt="">
                    <img id="under-button" src="public/img/under-button.png" alt="">
                    <img id="under-button" src="public/img/under-button.png" alt="">
                    <img id="under-button" src="public/img/under-button.png" alt="">
                </div>



            </div>

            <div class="icon-header">

                <a href="#"><img id="icon-header" src="public/img/icon/Vectorcart.png" alt="logo du panier"></a>


                <?= isset($_SESSION['current_session']) && $_SESSION['current_session']['status'] == 1 ? '<a href="account.php"><img id="icon-header" src="public/img/icon/Vectoraccount.png" alt="logo-myaccount"></a><a href="#"><img id="icon-header" src="public/img/logo-favorite.png" alt="logo des favoris title="favoris"></a><a href="logout.php"><img id="icon-header" src="public/img/icon/logout.png" alt="logout logo"></a>' : '<a href="authenticate.php"><img id="icon-header" src="public/img/icon/Vectoraccount.png" alt="logo-myaccount"></a>'; ?>

            </div>

            <div class="search-area">

                <form class="searchbox" action="http://thecodeblock.com">
                    <input type="search" placeholder="Search" />
                    <button type="submit" value="search">&nbsp;</button>
                </form>

            </div>



        </section>
        <section class="logo-area">
            <img src="public/img/logo-header.png" alt="logo-header">
        </section>

    </header>