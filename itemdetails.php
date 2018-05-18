<?php 
include("header.php");

if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $item = $_GET['item'];
    include("classes/class_lib.php");
    $listedItems = new DeliveryItems();  
    $response = $listedItems->getListedItemById($item);
    echo $response."</br>";
   

?>

<div class="fixed-bottom">
    <footer>
    Copyright&copy;commcourier.com
    <p><a href="#">Privacy policy</a> -
    <a href="#">Terms and condition</a>
    </footer>
    </div>

  </body>
</html>
