<?php if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


	include("header.php");
 ?>
<div class="container">
	<?php
    $username = $_SESSION['username'];
    $item = $_GET['item'];
    include("classes/class_lib.php");
    $bids = new InterestedTransporters();
	$response = $bids->getBidsForItem($item);
	echo $response;
	?>

</div>
 <?php
include("footer.php");
?>


    
   