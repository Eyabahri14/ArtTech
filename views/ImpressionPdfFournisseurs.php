<?php 
include_once "../core/FournisseursC.php";

    $Fourn=new FournisseursC();
    $listefourn=$Fourn->AfficherFournisseurs();

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage('L');
// Couleurs du cadre, du fond et du texte
    $pdf->SetDrawColor(48, 48, 48);
    $pdf->SetFillColor(128, 208, 208);
    $pdf->SetTextColor(48, 48, 48);
    // Epaisseur du cadre (1 mm)
    $pdf->SetLineWidth(0.2);
//$pdf->Image('"C:/wamp/www/BACK/views/images/bananes.jpg',10,6,30);
$pdf->SetFont('Arial','B',30);
$pdf->cell(200,10,'LISTE DES FOURNISSEURS',0,0,'C');
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
$pdf->cell(40,10,'Fournisseurs :',0,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(30,10,'ID_fournisseur',1,0,'C');
$pdf->cell(45,10,'Nom ',1,0,'C');
$pdf->cell(35,10,'Prenom ',1,0,'C');
$pdf->cell(35,10,'Code_Postal ',1,0,'C');
$pdf->cell(35,10,'Numero_tel ',1,0,'C');
$pdf->cell(40,10,'Email ',1,0,'C');
$pdf->cell(40,10,'Societe ',1,0,'C');



$pdf->Ln(); 

foreach ($listefourn as $row) {
	$pdf->cell(30,10,$row['ID_fournisseur'],1,0,'C');
	$pdf->cell(45,10,$row['Nom'],1,0,'C');
	$pdf->cell(35,10,$row['Prenom'],1,0,'C');
	$pdf->cell(35,10,$row['Code_Postal'],1,0,'C');
	$pdf->cell(35,10,$row['Numero_tel'],1,0,'C');
    $pdf->cell(40,10,$row['Email'],1,0,'C');
    $pdf->cell(40,10,$row['Societe'],1,0,'C');

  


	$pdf->Ln(10);
}


$pdf->cell(0,10,"ArtTech@gmail.com");
$pdf->Output();
?>