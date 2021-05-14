<?php

require "../assets/fpdf/fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=sefrim', 'root', '');
class myPDF extends FPDF
{
    function header()
    {
        $this->SetFont("Arial", 'B', 14);
        $this->Cell(50, 5, "LIST DES COURS",0,0,"C");
        $this->LN();
    }
    function headerTable()
    {
        $this->SetFont("Times", 'B', 12);
        $this->Cell(50, 30, "CATEGORY", 1, 0, 'C');
        $this->Cell(50, 30, "TEACHER", 1, 0, 'C');
        $this->Cell(50, 30, "TYPE", 1, 0, 'C');
        $this->Cell(30, 30, "SEANCE", 1, 0, 'C');

 
        $this->LN();
    }
    function viewTable($db)
    {
        $this->SetFont("Times", "", 12);

        $stmt = $db->query("select * from cour");
        while ($data = $stmt->fetch()) {
            $this->Cell(50, 10, $data["category"], 1, 0, 'C');
            $this->Cell(50, 10, $data["teacher"], 1, 0, 'C');
            $this->Cell(50, 10, $data["type"], 1, 0, 'C');
            $this->Cell(30, 10, $data["seance"], 1, 0, 'C');
            
            $this->Ln();
        }
    }
}

$pdf = new myPDF();

$pdf->AliasNbPages();
$pdf->AddPage("L", "A4", 0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
