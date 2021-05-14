<?php 
include_once "../core/ProduitC.php";

    $Produit2C=new ProduitC();
    $listeproduit=$Produit2C->AfficherProduit();

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
//$pdf->Image('"C:/wamp/www/SEFRIM/BACK/views/images/1.1.jpg',10,6,30);
$pdf->SetFont('Arial','B',30);
$pdf->cell(200,10,'GESTION STOCK',0,0,'C');
$pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(300,10,"SEFRIM SOCIETE",0,0,'C');
$pdf->Ln();
$pdf->cell(325,10,"268 avenue habib bourguiba charguia 2",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"          +216-9999999 / +216-71999999",0,0,'C');
 $pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->cell(40,10,'stock :',0,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(30,10,'Identifiant',1,0,'C');
$pdf->cell(45,10,'Nom ',1,0,'C');
$pdf->cell(35,10,'Quantite ',1,0,'C');
$pdf->cell(35,10,'Type ',1,0,'C');
$pdf->cell(35,10,'Prix ',1,0,'C');


$pdf->Ln(); 

foreach ($listeproduit as $row) {
	$pdf->cell(30,10,$row['Id'],1,0,'C');
	$pdf->cell(45,10,$row['Nom'],1,0,'C');
	$pdf->cell(35,10,$row['Quantite'],1,0,'C');
	$pdf->cell(35,10,$row['Type'],1,0,'C');
	$pdf->cell(35,10,$row['Prix'],1,0,'C');
	$pdf->Ln(10);
}

$pdf->cell(0,10,"                                                                                              SEFRIM@gmail.com");


$pdf->Output();
?>