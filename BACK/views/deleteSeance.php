<?php
include "../core/SeanceC.php";
include "../entities/Seance.php";

$id = $_GET["id"];

$SeanceC = new SeanceC();
$SeanceC->deleteSeance($id);



header("Location: viewSeance.php"); 