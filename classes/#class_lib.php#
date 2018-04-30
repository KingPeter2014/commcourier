<?php
 class CourierUsers {
	 //General user of the system. Could act as transporter, sender or receiver
	 var	$lastname,$othernames,$username,$pword;
	 //MD5($pword)
	 function registerCourierUser($lastname,$othernames,$username,$pword){
		 $sql = "INSERT INTO `commcourierusers` (lastname,othernames,username ,password,email,gender,telephone, address,state,country,postcode) VALUES ('".$lastname."')";
		 return "User Registration Not processed yet:".$sql;
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
	  function connectToDatabase(){
		  
		// mysqli
		$mysqli = new mysqli("localhost", "root", "", "commcourier");// A more secure method required for production database
		//$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
		//$row = $result->fetch_assoc();
		//echo htmlentities($row['_message']);
		return $mysqli;
	  }
	  function insertData($insertString){
		  
	  }
	  function updateData($updateString){
		  
	  }
	  function queryData($queryString){
		  
	  }
	  function deleteData($deleteString){
		  
	  }
	  
  }