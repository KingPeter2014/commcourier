<?php 

include("classes/class_lib.php"); 
$securityguard = new SecurityManager();

if(isset($_POST['signUpSubmitBtn'])){//Check if signUpSubmitBtn was clicked to register a new courier user
	$postcode = 3065;
	if (empty($_POST['lname'])){
	$lnameErr = "Last name is Required!";
	echo $lnameErr;
	return $lnameErr;
	}
	else{
	$lastname = $securityguard->removeHackCharacters($_POST['lname']);
	}

	if (empty($_POST['fname'])){
	echo "At least first name is Required!"; 
	return;
	}
	else{
	$othernames = $_POST['fname'];
	}

	if (empty($_POST['username'])){
	echo $usernameErr = "Username is Required!";
	return;
	}
	else{
	$username = $securityguard->removeHackCharacters($_POST['username']);
	}

	if (empty($_POST['pword'])){
	echo $error = "Password is Required!";
	return;
	}
	else{
	$pword = $securityguard->removeHackCharacters($_POST['pword']);
	}
	$cpword = $securityguard->removeHackCharacters($_POST['cpword']);
	if (strcmp($pword,$cpword)!=0){
	echo $error = "Password Mismatch!";
	return;
	}
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$telephone = $_POST['telephone'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$country = $_POST['country'];

	$newCourierUser = new CourierUsers();
	$response = $newCourierUser->registerCourierUser($lastname,$othernames,$username,$pword,$email,$gender,$telephone,$address,$state,$country,$postcode);

	echo $response;
	}//End Signup Page Processing
	
if(isset($_POST['loginSubmitBtn'])){//Login a  courier user
	
	if (empty($_POST['username'])){
	echo $usernameErr = "Username/Email is Required!";
	return;
	}
	else{
	$username = $securityguard->removeHackCharacters($_POST['username']);
	}
	if (empty($_POST['pword'])){
	echo $error = "Password is Required!";
	return;
	}
	else{
	$pword = $securityguard->removeHackCharacters($_POST['pword']);
	}
	$loginUser = new CourierUsers();
	$response = $loginUser->loginCourierUser($username,$pword);
	echo $response;
}	
if(isset($_POST['listjourneySubmitBtn'])){//List Journey
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
	
	$travellernote = $securityguard->removeHackCharacters($_POST['travellernote']);
	
	if (empty($_POST['uname'])){
		echo $error = "Username is Required!";
		return;
	}
	else{
		$uname = $securityguard->removeHackCharacters($_POST['uname']);
	}
	if (!(empty($_FILES["fileToUpload"]["name"]))){
		$target_dir = "Travel Documents/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		$docName = "Travel Documents/".$uname."_travel_doc_".time()."";
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
}

if(isset($_POST['listitemSubmitBtn'])){
//Processes listing Item a courier user wants to send
	
	ini_set('upload_max_filesize', '10M');
	ini_set('post_max_size', '10M');
	ini_set('max_input_time', 600);
	ini_set('max_execution_time', 600);

	$itemname = $securityguard->removeHackCharacters($_POST['iname']);
	$recievername = $securityguard->removeHackCharacters($_POST['rname']);
	$telephone = $securityguard->removeHackCharacters($_POST['tphone']);
	$address = $securityguard->removeHackCharacters($_POST['address']);
	$notes = $securityguard->removeHackCharacters($_POST['senderernote']);
	if (empty($_POST['uname'])){
		echo $error = "Username is Required!";
		return;
	}
	else{
		$uname = $securityguard->removeHackCharacters($_POST['uname']); // Listed by current user
	}

	if (!(empty($_FILES["itempicture"]["name"]))){
		$target_dir = "ListedItems/";
		$target_file = $target_dir . basename($_FILES["itempicture"]["name"]);
		$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		$docName = "ListedItems/".$uname."_listeditem_".time()."";
		$docpath = "".$docName.".".$fileType."";
		move_uploaded_file($_FILES["itempicture"]["tmp_name"], $docpath);
		echo "File upload successful</br>";
		}
	else{
		echo "No file uploaded";
		return;
	}
	$list_item = new DeliveryItems();
	$response = $list_item->listItem($uname,$itemname,$recievername,$telephone,$address,$notes,$docpath);
	echo $response;

	}


	if(isset($_POST['bidToSendItemBtn'])){
		//Creating a bid to send an item by a traveller
		if (empty($_POST['item'])){
		echo $error = "Item to bid for is required!";
		return;
		}
		else{
		$item = $securityguard->removeHackCharacters($_POST['item']); 
		}

		if (empty($_POST['amount'])){
		echo $error = "At what amount would you send the item?";
		return;
		}
		else{
		$amount = $securityguard->removeHackCharacters($_POST['amount']); 
		}

		if (empty($_POST['journey'])){
			echo $error = "You need to have active journey in order to bid for an item";
			return;
		}
		else{
			$amount = $securityguard->removeHackCharacters($_POST['journey']); 
		}

		$bidding = new InterestedTransporters();
		$response = $bidding->registerBid($bidder,$item,$journey,$amount);
		echo $response;

	}
	

?>