<?php
	if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
	
	include("../classes/class_lib.php"); 
	$securityguard = new SecurityManager();

	ini_set('upload_max_filesize', '10M');
	ini_set('post_max_size', '10M');
	ini_set('max_input_time', 600);
	ini_set('max_execution_time', 600);
	
	if (empty($_POST['dep-country'])){
		echo $depcountryErr = "Departure Country is Required!";
		return;
	}
	else{
		$depcountry = $securityguard->removeHackCharacters($_POST['dep-country']);
	}
	if (empty($_POST['des-country'])){
		echo $depcountryErr = "Destination Country is Required!";
		return;
	}
	else{
		$descountry = $securityguard->removeHackCharacters($_POST['des-country']);
	}
	if (empty($_POST['departuredate'])){
		echo $error = "Departure Date is Required!";
		return;
	}
	else{
		$departuredate = $securityguard->removeHackCharacters($_POST['departuredate']);
	}
	if (strtotime($departuredate) < time()){
		echo $error = "Departure Date is in the Past";
		return;
	}
	if (empty($_POST['arrivaldate'])){
		echo $error = "Arrival Date is Required!";
		return;
	}
	else{
		$arrivaldate = $securityguard->removeHackCharacters($_POST['arrivaldate']);
	}
	if (strtotime($departuredate) > strtotime($arrivaldate)){
		echo $error = "Arrival Date Is Earlier Than Departure Date";
		return;
	}
	if (empty($_POST['arrivalport'])){
		echo $error = "Arrival Port is Required!";
		return;
	}
	else{
		$arrivalport = $securityguard->removeHackCharacters($_POST['arrivalport']);
	}
	
	if (empty($_POST['travellernote'])){
		echo $error = "Traveller Note is Required!";
		return;
	}
	else{
		$travellernote = $securityguard->removeHackCharacters($_POST['travellernote']);
	}
	
	if (empty($_POST['uname'])){
		echo $error = "Username is Required!";
		return;
	}
	else{
		$uname = $securityguard->removeHackCharacters($_POST['uname']);
	}
	if (!(empty($_FILES["fileToUpload"]["name"]))){
		$target_dir = "../Travel Documents/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		$docName = "../Travel Documents/".$uname."_travel_doc_".time()."";
		$docpath = "".$docName.".".$fileType."";
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $docpath);
	}
	else{
		echo $error = "Document File is Required!";
		return;
	}
	
	$register_journey = new Journeys();
	$response = $register_journey->listJourney($uname,$depcountry,$descountry,$departuredate,$arrivaldate,$arrivalport,$travellernote,$docpath);
	echo $response;
?>