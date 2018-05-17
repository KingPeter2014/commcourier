<?php 

include("classes/class_lib.php"); 
$securityguard = new SecurityManager();


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


$pword = $_POST['pword'];
$cpword = $_POST['cpword'];
$gender = $_POST['gender'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$state = $_POST['state'];
$country = $_POST['country'];
$dbconnect = new DatabaseManager();
$db = $dbconnect->connectToDatabase();
if($db) echo "Database Connection is successful</br>";
$newCourierUser = new CourierUsers();
$response = $newCourierUser->registerCourierUser($lastname,$othernames,$username,$pword,$gender,$telephone,$address,$state,$country,$postcode);
echo $response;
?>