<?php
include "../core/CourC.php";
include "../entities/Cour.php";
 $courC = new courC();

    if($_POST['act'] == 'rate'){
    	$ip = $_SERVER["REMOTE_ADDR"];
    	$therate = $_POST['rate'];
    	$thepost = $_POST['post_id'];

    	
		$list = $courC->getReviewByIP($ip);

            	
		foreach ($list as $value) {
			$rate_db[] = $value;}

    	if(@count($rate_db) == 0 ){
    	$courC-> insertIntoRating($thepost,$ip,$therate);
    	}else{
    		mysql_query("UPDATE star SET rate= '$therate' WHERE ip = '$ip'");
    	}
    } 
?>