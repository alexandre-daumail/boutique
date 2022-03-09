<?php

    $title = "Nos étoiles";
    $css = "stars";
    require ('process/header.php'); 
    require ('classes/Star.php'); 
  
?>

<main>
<?php 

$star = new Star();
$list = $star->getStar();

test($list);

?>
</main>

<?php require('process/footer.php');?>
