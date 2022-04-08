<?php

$title = "Nos étoiles";
$css = "stars";
require('process/header.php');
require('classes/Star.php');

$star = new Star();
$pages = $star->totalPages();

?>

<main>

    <h1>Registre des étoiles</h1>
    <table>

    <thead> 
        <th>Référence</th>
        <th>Coordonnées</th>
        <th>Constellation</th>
        <th>Nom</th>
    </thead>
    <?php

    // On détermine sur quelle page on se trouve
    if (isset($_GET['start']) && !empty($_GET['start'])) {

        $currentPage = (int) strip_tags($_GET['start']);

        $start = $currentPage * 5 - 5;

        $registre = $star->getStars($start);

    } else {

        $registre = $star->getStars(0);
    }

    ?>

        <nav id="select-page">

        <ul class="pagination">
            <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                <a href="stars.php?start=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
            </li>
            <?php for ($page = 1; $page <= $pages; $page++) : ?>
                <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                    <a href="stars.php?start=<?= $page ?>" class="page-link"><?= $page ?></a>
                </li>
            <?php endfor ?>
            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                <a href="stars.php?start=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
            </li>
        </ul>

        </nav>
        
    </table>
    
</main>



<?php require('process/footer.php'); ?>