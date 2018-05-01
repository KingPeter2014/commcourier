<?php
 class CourierUsers {
	 //General user of the system. Could act as transporter, sender or receiver
	 var	$lastname,$othernames,$username,$pword;
	 //MD5($pword)
	 function registerCourierUser($lastname,$othernames,$username,$pword,$email,$gender,$telephone,$address,$state,$country,$postcode){
		 $pword = MD5($pword);
		 $response="";
		 $sql = "INSERT INTO `commcourierusers` (lastname,othernames,username ,password,email,gender,telephone, address,state,country,postcode) VALUES ('".$lastname."','".$othernames;
		$sql = $sql."','".$username ."','".$pword."','".$email."','".$gender."','".$telephone."','".$address."','".$state."','".$country."','".$postcode."')";
		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		if($db->connect_error){ 
			$response= $response. "Database Connection Failed</br>";
			$response= $response. "Error: "  . $db->connect_error;
			return $response;
		}
		else{
			$isInserted=$dbconnect->insertData($db,$sql);//Create new CommCourier user
			if($isInserted){
				$response= $response. $lastname.' has been successfully registered. <a href="login.php"> Login Here</a>';
			} else{
				$response= $response. "ERROR: Could not execute $sql. " . mysqli_error($db);
			}
			
		}
		$dbconnect->closeDatabase($db);
		return $response;
	 }
	 
	 function loginCourierUser($username,$pword){
		 
	 }
	 
	 function editCourierUser($username){
		 
	 }
	 
	 function updateCourierUser($id){
		 
	 }
	 
	 function setSession($id, $username){
		 //Set up session variables to identify user
	 }
	 
	 function destroySession(){
		 // Log out and cleanup after a session
	 }
	 
	 function set_Username($username){
		 $this->username = $username;
	 }

 }
 
 class Journeys {
	 //A transporter CourierUser indicates he will travel from one location to another on a given date 

 }
 
 class DeliveryItems{
	 //A sender CourierUser lists items that he/she would want to be transported from one destination to another on a given date and time 
	 
 }
 
 class InterestedTransporters{
	 //For listed DeliveryItems, a transporter CourierUser indicates interest on which DeliveryItem to send and at what cost
	 
 }
 
 class SelectedTransporters{
	 //the sender CourierUser who listed DeliveryItem then chooses the best InterestedTransporter that he wants
	 
 }
 
 class Payment{
	 //after negotiations are finalised the sender CourierUser makes payment on the platform
 }
 
 class RateJourneys{
	 // the sender CourierUser (or receiver CourierUser) rates the transporter CourierUser who handled the transported item
 }
 
 class Reports{
	 //Handles all reports and queries about the system as well as the dashboard for each CourierUser
 }
 
 class UserManager{
	 // This handles user account management for all CourierUsers
 }
  class SecurityManager{
	  function removeHackCharacters($input){
		  $input = trim($input); //remove extra white spaces
		  $input = stripslashes($input);//Remove backslashes
		  $input = htmlspecialchars($input);//Remove special HTML characters
		  return $input;
	  }
  }
  class DatabaseManager{
	  var	$connection;
	
	  function connectToDatabase(){
		$server1 = "localhost";$username = "root";$password="";
		$connection = new mysqli($server1, $username, $password, "commcourier");// A more secure method required for production database
		//$this->$connection = $connection;
		//$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
		//$row = $result->fetch_assoc();
		//echo htmlentities($row['_message']);
		return $connection;
	  }
	  function insertData($connection,$insertString){
		  return mysqli_query($connection, $insertString);
		  
	  }
	  function updateData($connection,$updateString){
		  
	  }
	  function queryData($connection,$queryString){
		  
	  }
	  function deleteData($connection,$deleteString){
		  
	  }
	  function closeDatabase($connection){
		$connection->close();
	  }
	  
  }