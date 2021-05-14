<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="d-flex justify-content-around pt-5" >

<?php 
include "../core/CourC.php";
include "../entities/Cour.php";
                                            $courC = new courC();

                                            
                                                $list = $courC->viewCour();

                                        
                                            foreach ($list as $value) {

?>


<div class="card p-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $value['category'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $value['teacher'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $value['type'];?></h6>

    <a href="ratingcour.php?id=<?php echo $value["id"]; ?>" class="btn btn-danger">rate</a>
  </div>
</div>



<?php }?>
</div>



</body>
</html>