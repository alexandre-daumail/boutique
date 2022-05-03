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
require('classes/Orders.php');
require('FPDF/fpdf.php');


$insert = new Order();
$commandes = $insert->getOrder($_SESSION['current_session']['user']['id']);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

foreach ($commandes as $commande) {

$pdf->Cell(200,10,$commande["content"]);

}




$pdf->Output();


?>