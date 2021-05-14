<?php 
include_once "../core/ArticleC.php";

    $Article2C=new ArticleC();
    $listearticle=$Article2C->AfficherArticle();

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
$pdf->cell(40,10,'Article :',0,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(30,10,'Identifiant',1,0,'C');
$pdf->cell(45,10,'Titre ',1,0,'C');
$pdf->cell(35,10,'Date ',1,0,'C');
$pdf->cell(35,10,'Description ',1,0,'C');


$pdf->Ln(); 

foreach ($listearticle as $row) {
	$pdf->cell(30,10,$row['Id'],1,0,'C');
	$pdf->cell(45,10,$row['Titre'],1,0,'C');
	$pdf->cell(35,10,$row['Date_a'],1,0,'C');
	$pdf->cell(35,10,$row['Description'],1,0,'C');
	$pdf->Ln(10);
}

$pdf->cell(0,10,"                                                                                              SEFRIM@gmail.com");


$pdf->Output();
?>