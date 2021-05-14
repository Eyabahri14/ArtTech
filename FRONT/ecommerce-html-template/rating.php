<?php

include "../../BACK/core/CourC.php";
include "../../BACK/entities/Cour.php";

$courC = new courC();

$oldRating = $_GET['oldRating'];
$ratingValue = $_GET['ratingValue'];
$id = $_GET['id'];


$courC->updateRating($oldRating,$ratingValue,$id);
?>
<script>
    console.log(<?php echo $id ?>)
</script>
