<?php

if (isset($_POST['akaId']) && !empty($_POST['akaId']) AND isset($_POST['dateFrom']) && !empty($_POST['dateFrom']) AND isset($_POST['dateTo']) && !empty($_POST['dateTo']) AND isset($_POST['version']) && !empty($_POST['version'])) {
	

	// get akaModel

	require '../includes/db/connect.php';
    
	$conn = new connect(); 

	$conn->connect_DB();

	if(!is_null($conn->connString)){
	    $id = intval($_POST['akaId']);
	    $query = "SELECT * FROM aka WHERE id = {$id}";

	    $result = mysqli_query($conn->connString,$query);
	    $c = mysqli_num_rows($result);

	    $akaObj = mysqli_fetch_assoc($result);
	    // var_dump($akaObj['aka_instituteName']);die();

	    $jsonObj = [
	    	"1"=>"2018_19_WT_23_04_1993_TOMA",
		 	"2"=>date_format(date_create($_POST['dateTo']),'d-m-Y'),
		 	"3"=>"12Hr",
		 	"4"=>"TOMA_1993_04_23_CED_WT",
		 	'client'=>$akaObj['aka_client'],
		 	'college'=>$akaObj['aka_college'],
		 	'project'=>$akaObj['aka_project'],
		 	"version"=>$_POST['version'],
		 	"valid_from"=>date_format(date_create($_POST['dateFrom']),'d-m-Y'),
		 	"valid_to"=>date_format(date_create($_POST['dateTo']),'d-m-Y'),
	    ];

	    try {
	    	$fname = '../web/js/'.$akaObj["aka_RISAcronyme"].'_ALTE.json';
		    $fp = fopen($fname, 'wb');
			fwrite($fp,json_encode($jsonObj));
		    fclose($fname);

		    echo "1";
		    return ;
	    } catch (Exception $e) {
	    	var_dump($e);
	    }


	}else{
	    return "Such Record not found.";
	}

}else{
	return "Invalid Request";
}

?>