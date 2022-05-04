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

$order = new Order();

$array = $order->displayOrder($_POST['code']);

$date = $array[0]['date'];

$name = $array[0]['nom'] . " " . $array[0]['prénom'];

$content = $array[0]['content'];

$quantity = $array[0]['totalQuantity'];

$image1 = "public/img/NOVASHOP.png";


$titre = "facture du " . $date;
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell( 40, 40, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->Cell(200,35,'                       Novashop - Facture du ' . $date);
$pdf->Ln(60);
$pdf->SetFont('Arial','',16);
$pdf->Cell(200,10, '_____________________________________________________');
$pdf->Ln(10);
$pdf->Cell(200,10, 'Commande de ' . $name);
$pdf->Ln(5);
$pdf->Cell(200,10, '_____________________________________________________');
$pdf->Ln(15);

if ($quantity == 2){

    list($content1, $content2) = explode(PHP_EOL, $content);

    $pdf->Cell(200,10,'- ' . utf8_decode($content1));
    $pdf->Ln(13);
    $pdf->Cell(200,10,'- ' . utf8_decode($content2));
    $pdf->Ln((30));
    $pdf->Cell(200,10, '_____________________________________________________');
    $pdf->Ln(10);
    $pdf->Cell(200,10, 'Prix total : '. $array[0]['totalPrice'] . '$');

    }

if ($quantity == 3){

    list($content1, $content2, $content3) = explode(PHP_EOL, $content);

    $pdf->Cell(200,10,'- ' . utf8_decode($content1));
    $pdf->Ln(13);
    $pdf->Cell(200,10,'- ' . utf8_decode($content2));
    $pdf->Ln(13);
    $pdf->Cell(200,10,'- ' . utf8_decode($content3));
    $pdf->Ln((30));
    $pdf->Cell(200,10, '_____________________________________________________');
    $pdf->Ln(10);
    $pdf->Cell(200,10, 'Prix total : '. $array[0]['totalPrice'] . '$');

    }

if ($quantity == 4){

    list($content1, $content2, $content3, $content4) = explode(PHP_EOL, $content);

    $pdf->Cell(200,10,'- ' . utf8_decode($content1));
    $pdf->Ln(13);
    $pdf->Cell(200,10,'- ' . utf8_decode($content2));
    $pdf->Ln(13);
    $pdf->Cell(200,10,'- ' . utf8_decode($content3));
    $pdf->Ln(13);
    $pdf->Cell(200,10,'- ' . utf8_decode($content4));
    $pdf->Ln((30));
    $pdf->Cell(200,10, '_____________________________________________________');
    $pdf->Ln(10);
    $pdf->Cell(200,10, 'Prix total : '. $array[0]['totalPrice'] . '$');
    
    }

if ($quantity == 5){

    list($content1, $content2, $content3, $content4, $content5) = explode(PHP_EOL, $content);

    $pdf->Cell(200,10,'- ' . utf8_decode($content1));
    $pdf->Ln(13);
    $pdf->Cell(200,10,'- ' . utf8_decode($content2));
    $pdf->Ln(13);
    $pdf->Cell(200,10,'- ' . utf8_decode($content3));
    $pdf->Ln(13);
    $pdf->Cell(200,10,'- ' . utf8_decode($content4));
    $pdf->Ln(13);
    $pdf->Cell(200,10,'- ' . utf8_decode($content5));
    $pdf->Ln((30));
    $pdf->Cell(200,10, '_____________________________________________________');
    $pdf->Ln(10);
    $pdf->Cell(200,10, 'Prix total : '. $array[0]['totalPrice'] . '$');
    
    }


    




$pdf->Output();


?>