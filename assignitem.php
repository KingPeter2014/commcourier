<?php if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $username = $_SESSION['username'];
    $item = $_GET['item'];
    include("classes/class_lib.php");
    $bids = new InterestedTransporters();
	$response = $bids->getBidsForItem($item);
	echo $response;

    
    ?>