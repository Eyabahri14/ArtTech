<?php 
include_once "../core/ProduitsC.php";

    $Article2C=new ProduitsC();
    $listearticle=$Article2C->AfficherProduits();

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage('L');
// Couleurs du cadre, du fond et du texte
    $pdf->SetDrawColor(48, 48, 48);
    $pdf->SetFillColor(128, 208, 208);
    $pdf->SetTextColor(48, 48, 48);
    // Epaisseur du cadre (1 mm)
    $pdf->SetLineWidth(0.2);
//$pdf->Image('"C:/wamp/www/SEFRIM/BACK/views/images/1.1.jpg',10,6,30);
$pdf->SetFont('Arial','B',30);
$pdf->cell(200,10,'GESTION PRODUITS',0,0,'C');
$pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(300,10,"ArTech SOCIETE",0,0,'C');
$pdf->Ln();
$pdf->cell(325,10,"268 avenue habib bourguiba charguia 2",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"          +216-9999999 / +216-71999999",0,0,'C');
 $pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->cell(40,10,'Article :',0,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(30,10,'Reference',1,0,'C');
$pdf->cell(45,10,'Nom ',1,0,'C');
$pdf->cell(35,10,'Prix ',1,0,'C');
$pdf->cell(35,10,'NomFrs ',1,0,'C');
$pdf->cell(45,10,'Type ',1,0,'C');
$pdf->cell(45,10,'Description ',1,0,'C');

$pdf->Ln(); 

foreach ($listearticle as $row) {
	$pdf->cell(30,10,$row['Reference'],1,0,'C');
	$pdf->cell(45,10,$row['Nom'],1,0,'C');
	$pdf->cell(35,10,$row['Prix'],1,0,'C');
	$pdf->cell(35,10,$row['NomFrs'],1,0,'C');
	$pdf->cell(45,10,utf8_decode($row['Type']),1,0,'C');
    $pdf->cell(45,10,utf8_decode($row['Description']),1,0,'C');

	$pdf->Ln(10);
}

$pdf->cell(0,10,"ArtTech@gmail.com");
$pdf->Output();
?>