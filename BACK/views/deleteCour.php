<?php
include "../core/CourC.php";
include "../entities/Cour.php";

$id = $_GET["id"];

$courC = new courC();
$courC->deleteCour($id);



header("Location: viewCour.php"); 