<!DOCTYPE html>
<html lang="en">

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
                    <button class="header-button">Accueil</button>
                    <button class="header-button">Informations</button>
                    <button class="header-button">Nos Étoiles</button>
                    <button class="header-button">Nos Offres</button>
                </div>
                <div class="under-button">
                    <img id="under-button" src="public/img/under-button.png" alt="">
                    <img id="under-button" src="public/img/under-button.png" alt="">
                    <img id="under-button" src="public/img/under-button.png" alt="">
                    <img id="under-button" src="public/img/under-button.png" alt="">
                </div>



            </div>
            <div class="icon-header">
                <a href="#"><img id="icon-header" src="public/img/icon-myaccount.png" alt="logo-myaccount"></a>
                <a href="#"><img id="icon-header" src="public/img/icon-cart.png" alt="logo-cart"></a>
                <a href="#"><img id="icon-header" src="public/img/logo-favorite.png" alt="logo-heart"></a>

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
    <section class="hero">
        <div class="left">
            <h2>Achetez une Étoile dans le Ciel !<br>
                Nomme une Étoile. C'est le plus beau cadeau de l'univers </h2>

        </div>
        <div class="right">
            <img id="star-certificate" src="./public/img/CERTIFICAT.png" alt="certificat">
        </div>
    </section>