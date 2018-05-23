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
				$response= $response.'success: Dear '. $lastname.', has been successfully registered. <a href="login.php"> Login Here</a>';
			} else{
				$response= $response. "error: Could not execute $sql. " . mysqli_error($db);
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
				$response= $response.'Dear '.$username.',<br>Your journey list has been successfully registered. <a href="Homepage.php"> Home Page</a>';
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
		$response ='<h3>All Journeys</h3>';
		$response =$response.$this->formatJourneysForDisplay($alljournies);
		$response =$response.'<table>';
		return $response;
		
	 }

	 function formatJourneysForDisplay($queryResult){
	 	//Format a query to display journey as a table
	 	$response="";
	 	if($queryResult->num_rows > 0){
	 		$response='<table border="1"><tr><th> Traveller</th><th>Depature </th><th>Destination </th><th>Date From </th><th>Arrival Date</th><th>Arrival Port </th><th>Actions </th></tr>';
			while ( $row = $queryResult->fetch_assoc()) {
				$response =$response.'<tr><td>'. $row['username'].'</td><td>'.$row['departurecountry'].'</td><td>'.$row['destinationcountry'].'</td><td>'.$row['departuredate'].'</td><td>'.$row['arrivaldate'].'</td><td>'.$row['arrivalport'].'</td><td><a href="journeydetails.php?journey='.$row['id'].'">Details</a>'.'</td></tr>';
			}
			$response =$response.'<table>';
		}
		else{
			$response =$response. "<i>No Journey was found</i>";
		}
		return $response;

	 }

	 function getMyJournies($username){
	 	//Get all Journies from database
	 	$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM `listjourney` WHERE username='".$username."'";
		$myjournies = $dbconnect->queryData($db,$sql);
		$response ='<h3>My Journies</h3>';
		$response =$response.$this->formatJourneysForDisplay($myjournies);
		
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
			$response =$response. "Journey Details not found";
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
	 function getOtherJournies($username){
		//Get Other journey not belonging to current user
	 	$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM `listjourney` WHERE username <> '". $username."'";
		$otherJournies = $dbconnect->queryData($db,$sql);
		$response ='<h3>Jouney Others Want To Make</h3>';
		$response =$response.$this->formatJourneysForDisplay($otherJournies);
		
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
				$response= $response.'Dear '.$listedby.',<br>Your Item has been successfully listed for sending. <a href="Homepage.php"> Home Page</a>';
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
		$response ='<h3>All Listed Items</h3>';
		$response =$response.$this->formatListedItemsForDisplay($allitems);
		
		return $response;

 	}
 	function formatListedItemsForDisplay($queryResult){
	 	//Format a query to display Item as a table
	 	$response="";
	 	if($queryResult->num_rows > 0){
	 		$response='<table border="1"><tr><th> Listed By</th><th>Description </th><th>Receiver Address </th><th>Time Listed </th><th>Status</th><th>Actions </th></tr>';
			while ( $row = $queryResult->fetch_assoc()) {
				$response =$response.'<tr><td>'. $row['listedby'].'</td><td>'.$row['description'].'</td><td>'.$row['receiveraddress'].'</td><td>'.$row['timelisted'].'</td><td>'.$row['status'].'</td>'.'<td><a href="itemdetails.php?item='.$row['id'].'">See Details</a></td></tr>';
			}
			$response =$response.'<table>';
		}
		else{
			$response =$response. "<i>No Listed Items found</i>";
		}
		return $response;

	 }

	 

	 function getMyListedItems($username){
		//Get Listed items belonging to current user
	 	$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM `listeditems` WHERE listedby = '". $username."'";
		$allitems = $dbconnect->queryData($db,$sql);
		$response ='<h3>Item I want to Send</h3>';
		$response =$response.$this->formatListedItemsForDisplay($allitems);
		
		return $response;

	}

	
	function getOtherListedItems($username){
		//Get Other Listed items not belonging to current user
	 	$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$sql = "SELECT * FROM `listeditems` WHERE listedby <> '". $username."'";
		$allitems = $dbconnect->queryData($db,$sql);
		$response ='<h3>Items Others want to Send</h3>';
		$response =$response.$this->formatListedItemsForDisplay($allitems);
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
					if(strcmp("notassigned", $row['status'])==0){
						//Only display assign link if not assigned
						$response =$response.'<a href="assignitem.php?item='.$row['id'].'">Assign</a>';
						$response =$response.'|<a href="edititem.php?item='.$row['id'].'">Edit</a>';
						$response =$response.'|<a href="deleteitem.php?item='.$row['id'].'">Delete</a>';
					}
					elseif (strcmp("accepted", $row['status'])==0) {
						$response =$response.'Waiting for your Payment';
					}
					else{
						$response =$response.'Waiting for traveller\'s acceptance';
					}
					

				}
				else{//Handle listed items not belonging to current loggen User
					if(strcmp("notassigned", $row['status'])==0 ||strcmp("rejected", $row['status'])==0){
						$response =$response.'<a href="interestedinsending.php?item='.$row['id'].'">Indicate interest to Send this Item</a>';
					}
					else{
						$response =$response.'Bidding to send this Item has closed';

					}
				}
				$response =$response.'</td></tr>';
			}
		}
		else{
			$response =$response. "Item Details not found";
		}
		return $response;


	 }

	 

	function getItemAssignment($item){
		//Get the assigments and status and possibly link to payment page if transporter has accepted to transport
	}
	 
 }
 
 class InterestedTransporters{
	 //For listed DeliveryItems, a transporter CourierUser indicates interest on which DeliveryItem to send and at what cost
 	function registerBid($bidder,$item,$journey,$amount,$currencycode){

 		
 		$status = "notassigned";
 		$response="";
 		$sql = "INSERT INTO `bids`(bidder,item,journey,amount,status,currencycode) VALUES ('". $bidder."','".$item."','".$journey."','".$amount."','".$status."','".$currencycode."')";
 		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		if($db->connect_error){ 
			$response= $response. "Database Connection Failed</br>";
			$response= $response. "Error: "  . $db->connect_error;
			return $response;
		}
		else{
			$isInserted=$dbconnect->insertData($db,$sql);//Register interest to send an item
			if($isInserted){
				$response= $response.'Dear '.$bidder.',<br>Your bid has been successfully recorded. <a href="Homepage.php"> Home Page</a>';
				

			} else{
				$response= $response. "ERROR: Could not execute $sql. " . mysqli_error($db);
			}
			
		}
		$dbconnect->closeDatabase($db);
		return $response;

 	}

 	function getBidsForItem($item){
 		//Return a list of the bids for a particular item.These are bids by travelers to send the particular listed item
 		$sql = "SELECT b.id AS bidid,b.bidder,b.item,b.journey,b.amount,b.timeofbid,b.status,b.currencycode, l.id,j.username,j.departuredate,j.arrivaldate,j.arrivalport from bids b, listeditems l, listjourney j WHERE l.id = b.item AND b.bidder = j.username AND j.id = b.journey AND b.item=$item";
 		$response ='<form action="process.php" METHOD="POST">';

 		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$bids = $dbconnect->queryData($db,$sql);
		if($bids->num_rows > 0){
			while ( $row = $bids->fetch_assoc()) {
			$response =$response.'<input type="radio" name="assignitem" value="'.$row['bidid'].'"/>'.'<a href="viewprofile.php?username='.$row['username'].'">'.$row['username'].'</a>('.$row['departuredate'].','.$row['arrivalport'].'), Amount:'.$row['currencycode'].$row['amount'].'</br>';
			}
		}
		else{
			return "No bids found for this item/package";
		}
		$response =$response.'<button type="submit" name="submitAssignmentBtn"> Submit</button>';
		$response =$response.'<button type="reset" > Cancel</button>';
		return $response;
		
 	}
 	function getBidByID($id){
 		$sql = "SELECT * FROM bids WHERE id=$id";
 		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$thisbid = $dbconnect->queryData($db,$sql);
		return $thisbid;
		$dbconnect->closeDatabase($db);
 	}
	 
 }
 
 class SelectedTransporters{
	 //the sender CourierUser who listed DeliveryItem then chooses the best InterestedTransporter that he wants
 	function assignItemToBestBid($bidid,$sender){
 		// Record the bid that worn the bid to send an item
 		//$sender is the current logged in user
 		$response='';
 		$bids = new InterestedTransporters();
 		$thisbid = $bids->getBidByID($bidid);
 		$item = 0;
 		if($thisbid->num_rows == 1){
 			$row = $thisbid->fetch_assoc();
 			$sql = "INSERT into assigneditems(sender,transporter,agreedprice,bidid) VALUES('$sender','".$row['bidder']."',".$row['amount'].",$bidid)";
 			$item = $row['item'];
 			$dbconnect = new DatabaseManager();
			$db = $dbconnect->connectToDatabase();
			$createAssignment = $dbconnect->insertData($db,$sql);
 			if($createAssignment){
 				//Send email or SMS to transporter and update the status in listeditems to 'assigned'
 				//Now update the status of the item to assigned
 				$sql="UPDATE listeditems SET status = 'assigned' WHERE id=$item";
 				$upd=$dbconnect->updateData($db,$sql);
 				$response= $response."Your choice of traveler has been successfully recorded";
 			}
 			else{

 				$response= $response." Error Recording your choice of Traveler: ".mysqli_error($db);
 			}

 		}
 		else{
 			return "Could not retrieve the traveller details to update your choice";
 		}
 		


 		return $response;

 	}

 	function getBidsAssignedToTraveler($currentuser){
 		$sql="SELECT * FROM `assigneditems` WHERE transporter='$currentuser'";
 		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$wonbids = $dbconnect->queryData($db,$sql);
		$response ='<h3>Bids I have won</h3>';
		if($wonbids->num_rows > 0){
			while ( $row = $wonbids->fetch_assoc()) {
				$response =$response.'<form action="process.php" METHOD="POST"><table border="1">';
				$response =$response.'<tr><th><input type="hidden" name="assignitem" value="'.$row['id'].'"/>'.'<a href="viewprofile.php?username='.$row['sender'].'">'.$row['sender'].'</a>(You will receive:'.$this->getBaseCurrencyForABid($row['bidid']).$row['agreedprice'].')</th></br>';
				$response =$response.'<td><button type="submit" name="submitBidAcceptance"> Accept</button></td>';
			$response =$response.'<td><button type="submit" name="submitBidRejection"> Reject</button></td></tr></table>';
			}

		}
		else{
			return $response=$response."You have not won any bids";
		}
		
		return $response;

 	}
 	function getBaseCurrencyForABid($bidid){
 		//Get the base currency used for a bid
 		$sql="SELECT * FROM `bids` WHERE id=$bidid";
 		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$thisbid = $dbconnect->queryData($db,$sql);
		if($thisbid->num_rows == 1){
			$row = $thisbid->fetch_assoc();
			return $row['currencycode'];

		}
		else
			return 'USD';



 	}
 	function recordBidAcceptanceOrRejection($assignmentid,$action){
 		$sql="UPDATE assigneditems SET accepted = '$action' WHERE id = $assignmentid";
 		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$upd=$dbconnect->updateData($db,$sql);
		$response="";
		if(mysqli_affected_rows($db)>0){
			$response = $response."Item assignment status successfully updated to :".$action;
			//if(strcmp($action, "accepted")==0){
				//Get item that got assigned and update its status to "accepted"
				$sql="SELECT b.id AS bidid, a.id, b.item from bids b, assigneditems a WHERE a.bidid = b.id and a.id=$assignmentid";
				$iteminAssignment = $dbconnect->queryData($db,$sql);
				if($iteminAssignment->num_rows < 1){
					$response = $response."</br>Item in Assignment no longer exists";
					return $response;
					}

				$row = $iteminAssignment->fetch_assoc();
				$itemid = $row['item'];
				$sql="UPDATE listeditems SET status = '$action' WHERE id = $itemid";
				$upd=$dbconnect->updateData($db,$sql);
				if(mysqli_affected_rows($db)>0){
					$response = $response."</br>Item status successfully updated to:".$action;
				}
				elseif(mysqli_affected_rows($db)==0){
					$response = $response."</br>Item has been previously set to:".$action;

				}
				else{
					$response = $response."</br>Item no longer exists".mysqli_error($db);

				}
		}
		elseif(mysqli_affected_rows($db)==0){
			$response = $response."</br>Item Assignment has been previously set to:".$action;

		}
		else{
			$response = $response."Unable to record your response for this offer".mysqli_error($db);

		}
 		return $response;
 	}
 	function getConfirmedBidsAssignedByUser($username){
 		//Get the list of bids that this user has assigned to other travellers and of which those travelers have accepted to deliver. This will now enable this user to pay to the commcourier platform
 		$response = " <h3>Items I need to Pay for</h3>";

 		$sql = "SELECT i.id as itemid,i.description, a.transporter,a.sender,a.agreedprice,a.bidid,i.status, a.id FROM listeditems i,assigneditems a WHERE status='accepted' AND sender = '$username'";
 		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$myacceptedoffers = $dbconnect->queryData($db,$sql);
		if($myacceptedoffers->num_rows > 0){
			while ( $row = $myacceptedoffers->fetch_assoc()) {
				$response =$response.'<table border="1">';
				$response =$response.'<tr><th><input type="hidden" name="assignitem" value="'.$row['itemid'].'"/>'.'<a href="pay.php?item='.$row['itemid'].'&amount='.$row['agreedprice'].'">'.'Pay for:'.$row['description'].'</a>(You will pay:'.$this->getBaseCurrencyForABid($row['bidid']).$row['agreedprice'].')</th>';
				
			$response =$response.'</table>';
				

			}
		}
		else{
			$response = $response.'You do not have accepted offers due for payment';
		}



 		return $response;
 	}
	 
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
			  exit; 
			  
		  }
		  else{
			  header('Location: login.php'); 
		  }
	  }
  }

  class DatabaseManager{
	  var	$connection;
	
	  function connectToDatabase(){
		$server1 = "localhost";$username = "root";$password="";
		$connection = new mysqli($server1, $username, $password, "commcourier");// A more secure method required for production database
		return $connection;
	  }


	  function insertData($connection,$insertString){
		  return mysqli_query($connection, $insertString);
		  
	  }
	  function updateData($connection,$updateString){
		  return mysqli_query($connection, $updateString);
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

  class Utilities{
  	function loadCountries(){
  		$sql = "SELECT * FROM `apps_countries`";
  		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$countries = $dbconnect->queryData($db,$sql);
		$response='';
		if($countries->num_rows > 0){
			while ( $row = $countries->fetch_assoc()) {
				
				$response =$response. '<option value="'.$row['country_code'].'">'.$row['country_name'].'</option>';

			}

		}
		else{
			$response =$response. '<option value="">Error getting Countries</option>';

		}
		return $response;
  	}
  	function getCountryCurrencyCodes(){
  		$sql = "SELECT * FROM `currency`";
  		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$countries = $dbconnect->queryData($db,$sql);
		$response='';
		if($countries->num_rows > 0){
			while ( $row = $countries->fetch_assoc()) {
				
				$response =$response. '<option value="'.$row['code'].'">'.$row['code'].'</option>';

			}

		}
		else{
			$response =$response. '<option value="">Error getting currencies</option>';

		}
		return $response;

  	}
  	function updateSiteVisitCounter(){
  		$sql="UPDATE counter SET counter = counter + 1";
  		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$upd=$dbconnect->updateData($db,$sql);
		//Retrieves the current count
		$sql="SELECT counter FROM counter";
		$count = $dbconnect->queryData($db,$sql);
		if($count->num_rows > 0){
			$row = $count->fetch_assoc();
			return $row['counter'];
		}
  	}
  	function sendEmailToRegisteredClients($subject,$message){
  		//Send only to people who have registered with the app
  		$from_email = 'commcourier@commcourier.com';
  		$sql = "SELECT email FROM `commcourierusers`";
  		$dbconnect = new DatabaseManager();
		$db = $dbconnect->connectToDatabase();
		$countries = $dbconnect->queryData($db,$sql);
		$response='';
		if($countries->num_rows > 0){
			while ( $row = $countries->fetch_assoc()) {
				
				$to_email=$row['email'];
				$status = $this->sendMail($to_email, $subject, $message, $from_email);
				$response= $response.$to_email.':'. $status.'<br>';

			}

		}
		else{
			$response =$response. 'No emails retrieved';

		}
		return $response;


  	}
  	function sendMail($to_email, $subject, $message, $from_email){
  		//Send email to $to_email including formatted html content
  		$headers = "From: " . strip_tags($from_email) . "\r\n";
		$headers .= "Reply-To: commcourier@commcourier.com \r\n";
		//$headers .= "CC: susan@example.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  		$mailSendingStatus = mail($to_email, $subject, $message,$headers);
  		return $mailSendingStatus;
  	}
  	function currencyConverter($from_currency, $to_currency, $amount) {
		$amount    = urlencode($amount);
		$from    = urlencode($from_currency);
		$to        = urlencode($to_currency);
		$url    = "http://www.google.com/ig/calculator?hl=en&q=$amount$from=?$to";
		$ch     = @curl_init();
		$timeout= 0;
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch,  CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$rawdata = curl_exec($ch);
		curl_close($ch);
		$data = explode('"', $rawdata);
		$data = explode(' ', $data['3']);
		$var = $data['0'];
		return round($var,3);
	}

  }