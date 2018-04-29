<?php 

include("classes/class_lib.php"); 
$securityguard = new SecurityManager();


$postcode = 3065;
$lastname = $securityguard->removeHackCharacters($_POST['lname']);

$othernames = $_POST['fname'];
$username = $_POST['username'];
$pword = $_POST['pword'];
$cpword = $_POST['cpword'];
$gender = $_POST['gender'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$state = $_POST['state'];
$country = $_POST['country'];

$newCourierUser = new CourierUsers();
$response = $newCourierUser->registerCourierUser($lastname,$othernames,$username,$pword,$gender,$telephone,$address,$state,$country,$postcode);
echo $response;
?>