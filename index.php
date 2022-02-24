<?php
session_start();
$title = "Accueil - NovaShop";
ob_start();
?>

   

<?php
$content = ob_get_clean();
require('template.php');
?>