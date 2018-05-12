<?php
 class CourierUsers {
	 //General user of the system. Could act as transporter, sender or receiver
	 var	$lastname,$othernames,$username,$pword,$db,$dbconnect;
		function __construct() {
			$dbconnect = new DatabaseManager();
			$db = $dbconnect->connectToDatabase();		
		}		
 
		function set_db($db) {
		 	 $this->db = $db;
		}	
 
		function get_db() {		
		 	 return $this->db;		
		 }		
	 //MD5($pword)
	 function registerCourierUser($lastname,$othernames,$username,$pword,$email,$gender,$telephone,$address,$state,$country,$postcode){
		 $pword = MD5($pword);
		 $response="";
		 $sql = "INSERT INTO `commcourierusers` (lastname,othernames,username ,password,email,gender,telephone, address,state,country,postcode) VALUES ('".$lastname."','".$othernames;
		$sql = $sql."','".$username ."','".$pword."','".$email."','".$gender."','".$telephone."','".$address."','".$state."','".$country."','".$postcode."')";
		//$db=$this->get_db();
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
		 $dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM commcourierusers WHERE username='".$username."' OR email='".$username."' AND password='".MD5($pword)."'";
		$courieruser = $dbconnect->queryData($db,$sql);
		if($courieruser->num_rows == 1){
			//Login by creating session variable and redirect to homepage
			$row = $courieruser->fetch_assoc();
			$securityguard = new SecurityManager();
			$securityguard->setUpSession($row['username']);
		}
		else{
			return "Wrong Username/email or Password Or User does not exist";
		}
		
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
	var	$username,$db,$dbconnect;
		function __construct() {
			$dbconnect = new DatabaseManager();
			$db = $dbconnect->connectToDatabase();		
		}		
 
		function set_db($db) {
		 	 $this->db = $db;
		}	
 
		function get_db() {		
		 	 return $this->db;		
		 }		
	 //MD5($pword)
	 function listJourney($username,$depcountry,$descountry,$departuredate,$arrivaldate,$arrivalport,$travellernote,$docpath){
		 $response="";
		 date_default_timezone_set("Africa/Lagos");
		 $datecreated = date("Y-m-d h:i:sa");
		 $datetimenumber = time();
		 $sql = "INSERT INTO `listjourney` (username,departurecountry,destinationcountry,departuredate,arrivaldate,arrivalport,travellernote,docpath,datecreated, datetimenumber) VALUES ('".$username."','".$depcountry."','".$descountry."','".$departuredate."','".$arrivaldate."','".$arrivalport."','".$travellernote."','".$docpath."','".$datecreated."','".$datetimenumber."')";
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
				$response= $response.'Dear '.$username.',<br>Your journey list has been successfully registered. <a href="homepage.php"> Home Page</a>';
			} else{
				$response= $response. "ERROR: Could not execute $sql. " . mysqli_error($db);
			}
			
		}
		$dbconnect->closeDatabase($db);
		return $response;
	 }

	 function getAllJourneys(){
	 	//Get all Journies from database
	 	$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM `listjourney`";
		$alljournies = $dbconnect->queryData($db,$sql);
		$response ='<h3>All Journeys</h3><table border="1"><tr><th> Traveller</th><th>Depature </th><th>Destination </th><th>Date From </th><th>Arrival Date</th><th>Arrival Port </th><th>Actions </th></tr>';
		$response =$response.$this->formatJourneysForDisplay($alljournies);
		$response =$response.'<table>';
		return $response;
		
	 }

	 function formatJourneysForDisplay($queryResult){
	 	//Format a query to display journey as a table
	 	$response="";
	 	if($queryResult->num_rows > 0){
			while ( $row = $queryResult->fetch_assoc()) {
				$response =$response.'<tr><td>'. $row['username'].'</td><td>'.$row['departurecountry'].'</td><td>'.$row['destinationcountry'].'</td><td>'.$row['departuredate'].'</td><td>'.$row['arrivaldate'].'</td><td>'.$row['arrivalport'].'</td><td><a href="journeydetails.php?journey='.$row['id'].'">Details</a>'.'</td></tr>';
			}
		}
		else{
			$response =$response. "No Journey was found";
		}
		return $response;

	 }

	 function getMyJournies($username){
	 	//Get all Journies from database
	 	$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM `listjourney` WHERE username='".$username."'";
		$alljournies = $dbconnect->queryData($db,$sql);
		$response ='<h3>My Journies</h3><table border="1"><tr><th> Traveller</th><th>Depature </th><th>Destination </th><th>Date From </th><th>Arrival Date</th><th>Arrival Port </th><th>Actions </th></tr>';
		$response =$response.$this->formatJourneysForDisplay($alljournies);
		$response =$response.'<table>';
		return $response;


	 }

	 function getJourneyById($id){
	 	//Get details of a particular journey
	 	$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM `listjourney` WHERE id = '". $id."'";
		$thisjourney = $dbconnect->queryData($db,$sql);
		$response ='<h3>Journey Details</h3><table border="1">';
		$response =$response.$this->formatJourneyDetailsForDisplay($thisjourney);
		$response =$response.'<table>';
		return $response;

		return $response;

	 }

	 function formatJourneyDetailsForDisplay($queryResult){
	 	$cur_user= $_SESSION['username'];
	 	$response="";
	 	if($queryResult->num_rows > 0){
			while ( $row = $queryResult->fetch_assoc()) {
				$response =$response.'<tr><th> Traveller</th><td><a href="viewprofile.php?username='.$row['username'].'"">'.$row['username'].'</a></td></tr><tr><th>Depature Country </th><td>'.$row['departurecountry'].'</td><tr><th>Destination Country </th><td>'.$row['destinationcountry'].'</td></tr><tr><th>Depature Date </th><td>'.$row['departuredate'].'</td></tr><th>Arrival Date</th><td>'.$row['arrivaldate'].'</td></tr><tr><th> Arrival Port</th><td>'. $row['arrivalport'].'</td></tr><tr>'.'<th>Documents</th><td><a  href="'.$row['docpath'].'">View Itinerary</a>'.'</td></tr><tr><th>Actions</th><td>';
				if (strcmp($cur_user, $row['username'])==0){
					$response =$response.'|<a href="editjourney.php?journey='.$row['id'].'">Edit</a>';
					$response =$response.'|<a href="deletejourney.php?journey='.$row['id'].'">Delete</a>';

				}
				else{
					$response =$response.'<a href="interestedinsending.php?item='.$row['id'].'">Indicate interest to Send this Item</a>';
				}
				$response =$response.'</td></tr>';
			}
		}
		else{
			$response =$response. "Item Details not found";
		}
		return $response;


	 }

	 function getActiveJourniesForCurrentUser($username){
	 	//Bids for current users that are in the future
	 	$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM `listjourney` WHERE username = '". $username."'";
		$thisjourney = $dbconnect->queryData($db,$sql);
		$response="";
		if($thisjourney->num_rows > 0){
			while ( $row = $thisjourney->fetch_assoc()) {
				if (strtotime($row['departuredate']) > time())
					$response =$response. '<option value="'.$row['id'].'">'.$row['departuredate'].'('.$row['arrivalport'].')</option>';

			}

		}
		else{
			$response = '<option value="">No active Journey</option>';

		}
		

		return $response;
	 }

	 function getClassOfJourney($filter){

	 }
	 
	 
	 function editListJourney($username){
		 
	 }
	 
	 function updateListJourney($id){
		 
	 }
	 
	 function setSession($id, $username){
		 //Set up session variables to identify user
	 }
	 
	 
	 
	 function set_Username($username){
		 $this->username = $username;
	 }
 }
 
 class DeliveryItems{
	 //A sender CourierUser lists items that he/she would want to be transported from one destination to another on a given date and time 
 	function listItem($listedby,$description,$receivername,$receiverphone,$receiveraddress,$notes,$itempixpath){
 		$status = "notassigned";
 		$response="";
 		$sql = "INSERT INTO `listeditems` (listedby,description,receivername,receiverphone,receiveraddress,notes,itempixpath,status) VALUES ('". $listedby."','".$description."','".$receivername."','".$receiverphone."','".$receiveraddress."','".$notes."','".$itempixpath."','".$status."')";
 		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		if($db->connect_error){ 
			$response= $response. "Database Connection Failed</br>";
			$response= $response. "Error: "  . $db->connect_error;
			return $response;
		}
		else{
			$isInserted=$dbconnect->insertData($db,$sql);//List a new item to be sent
			if($isInserted){
				$response= $response.'Dear '.$listedby.',<br>Your Item has been successfully listed for sending. <a href="homepage.php"> Home Page</a>';
			} else{
				$response= $response. "ERROR: Could not execute $sql. " . mysqli_error($db);
			}
			
		}
		$dbconnect->closeDatabase($db);
		return $response;
 	

 	}

 	function getAllListedItems(){
 		//Get all Listed items from database
	 	$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM `listeditems`";
		$allitems = $dbconnect->queryData($db,$sql);
		$response ='<h3>All Listed Items</h3><table border="1"><tr><th> Listed By</th><th>Description </th><th>Receiver Address </th><th>Time Listed </th><th>Status</th><th>Actions </th></tr>';
		$response =$response.$this->formatListedItemsForDisplay($allitems);
		$response =$response.'<table>';
		return $response;

 	}
 	function formatListedItemsForDisplay($queryResult){
	 	//Format a query to display Item as a table
	 	$response="";
	 	if($queryResult->num_rows > 0){
			while ( $row = $queryResult->fetch_assoc()) {
				$response =$response.'<tr><td>'. $row['listedby'].'</td><td>'.$row['description'].'</td><td>'.$row['receiveraddress'].'</td><td>'.$row['timelisted'].'</td><td>'.$row['status'].'</td>'.'<td><a href="itemdetails.php?item='.$row['id'].'">See Details</a></td></tr>';
			}
		}
		else{
			$response =$response. "No Listed Items found";
		}
		return $response;

	 }

	 

	 function getMyListedItems($username){
		//Get Listed items belonging to current user
	 	$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM `listeditems` WHERE listedby = '". $username."'";
		$allitems = $dbconnect->queryData($db,$sql);
		$response ='<h3>My Listed Items</h3><table border="1"><tr><th> Listed By</th><th>Description </th><th>Receiver Address </th><th>Time Listed </th><th>Status</th><th>Actions </th></tr>';
		$response =$response.$this->formatListedItemsForDisplay($allitems);
		$response =$response.'<table>';
		return $response;

	}

	
	function getOtherListedItems($username){
		//Get Other Listed items not belonging to current user
	 	$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM `listeditems` WHERE listedby <> '". $username."'";
		$allitems = $dbconnect->queryData($db,$sql);
		$response ='<h3>Other Listed Items</h3><table border="1"><tr><th> Listed By</th><th>Description </th><th>Receiver Address </th><th>Time Listed </th><th>Status</th><th>Actions </th></tr>';
		$response =$response.$this->formatListedItemsForDisplay($allitems);
		$response =$response.'<table>';
		return $response;

	}
	function getListedItemById($id){
		//Get Listed item by its id field
	 	$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM `listeditems` WHERE id = '". $id."'";
		$thisitem = $dbconnect->queryData($db,$sql);
		$response ='<h3>Item Details</h3><table border="1">';
		$response =$response.$this->formatListedItemDetailsForDisplay($thisitem);
		$response =$response.'<table>';
		return $response;

	}
	function formatListedItemDetailsForDisplay($queryResult){
	 	//Format a query to display single item details
	 	$cur_user= $_SESSION['username'];
	 	$response="";
	 	if($queryResult->num_rows > 0){
			while ( $row = $queryResult->fetch_assoc()) {
				$response =$response.'<tr><th> Listed By</th><td>'. $row['listedby'].'</td></tr><tr><th>Description </th><td>'.$row['description'].'</td><tr><th>Receiver Address </th><td>'.$row['receiveraddress'].'</td></tr><tr><th>Time Listed </th><td>'.$row['timelisted'].'</td></tr><th>Status</th><td>'.$row['status'].'</td></tr><tr>'.'<th>Image</th><td><img  src="'.$row['itempixpath'].'" style="max-height: 200px; max-width: 200px;"></td></tr><tr><th>Actions</th><td>';
				if (strcmp($cur_user, $row['listedby'])==0){
					$response =$response.'<a href="assignitem.php?item='.$row['id'].'">Assign</a>';
					$response =$response.'|<a href="edititem.php?item='.$row['id'].'">Edit</a>';
					$response =$response.'|<a href="deleteitem.php?item='.$row['id'].'">Delete</a>';

				}
				else{
					$response =$response.'<a href="interestedinsending.php?item='.$row['id'].'">Indicate interest to Send this Item</a>';
				}
				$response =$response.'</td></tr>';
			}
		}
		else{
			$response =$response. "Item Details not found";
		}
		return $response;


	 }

	 function includeItemAssignment($item){

	 }

	 function includeInterestedInSendingItem($item){

	 }

	
	 
 }
 
 class InterestedTransporters{
	 //For listed DeliveryItems, a transporter CourierUser indicates interest on which DeliveryItem to send and at what cost
 	function registerBid($bidder,$item,$journey,$amount){

 		$response = "Not recorded yet";

 	}
	 
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
	  function setUpSession($username){
		  @session_start();
		  if ( ! isset($_SESSION['username'])){
			  $_SESSION['username']= $username;
			  header('Location: Homepage.php'); 
			  
		  }
		  else{
			  header('Location: Homepage.php'); 
		  }
	  }
  }
  class DatabaseManager{
	  var	$connection;
	
	  function connectToDatabase(){
		$server1 = "localhost";$username = "root";$password="";
		$connection = new mysqli($server1, $username, $password, "commcourier");// A more secure method required for production database
		//$this->$connection = $connection;
		
		
		return $connection;
	  }
	  function insertData($connection,$insertString){
		  return mysqli_query($connection, $insertString);
		  
	  }
	  function updateData($connection,$updateString){
		  
	  }
	  function queryData($connection,$queryString){
		  $result = $connection->query($queryString);
		  return $result;
		  
	  }
	  function deleteData($connection,$deleteString){
		  
	  }
	  function closeDatabase($connection){
		$connection->close();
	  }
	  
  }