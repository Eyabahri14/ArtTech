<?php 
include_once "../core/houaidaC.php";
//session_start();
 

$livraison1C=new LivraisonC();
$listelivraison=$livraison1C->RecupererLivraison($_GET['id']);

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
//$pdf->Image('logo3.png',10,10,30);
$pdf->Ln() ;

$pdf->Ln() ;
$pdf->SetFont('Arial','B',30);

 //Rue Banane , Charguia 2 , 2035 Ariana,Tunis


$pdf->cell(200,20,'Detail de la livraison',0,0,'C');
$pdf->Ln() ;

$pdf->SetFont('Arial','B',9);
$pdf->cell(40,10,"SEFRIM Concept Store",0,0,'C');
$pdf->Ln();
$pdf->cell(65,10,"Adresse: 2035 Ariana Charguia 2 ,Tunis",0,0,'C');
$pdf->Ln();
$pdf->cell(50,10,"Telephone: + 216 26234330",0,0,'C');
 $pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->cell(80,20,'Detail de la livraison:',0,0,'C');

$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(35,10,'Reference',1,0,'C');
$pdf->cell(35,10,'Date de livraison',1,0,'C');
$pdf->cell(35,10,'Nom du livreur',1,0,'C');
$pdf->cell(40,10,'Adresse de Destination',1,0,'C');
$pdf->cell(35,10,'Prix de Commande',1,0,'C');

$pdf->Ln(); 

foreach ($listelivraison as $row) 
{

    $pdf->cell(35,10,$row['id'],1,0,'C'); 
	$pdf->cell(35,10,$row['DateLivraison'],1,0,'C');
	$pdf->cell(35,10,$row['NomLivreur'],1,0,'C');
	$pdf->cell(40,10,$row['Adresse'],1,0,'C');
	$pdf->cell(35,10,$row['Prix'],1,0,'C');
	$pdf->Ln();
	
	
}
$pdf->cell(0,10,"Nb:En cas d'annulation de la commande Veuillez nous envoyer un mail:");
$pdf->Ln();
$pdf->cell(50,10,"SEFRIM@gmail.com en presiciant l'identifiant de votre commande");

$pdf->Output();
?>