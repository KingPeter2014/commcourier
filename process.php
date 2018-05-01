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
	echo "Login will be processed here! Under Construction";
}

?>