<?php if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $item = $_GET['item'];
    include("classes/class_lib.php");
    $listedItems = new DeliveryItems();  
    $response = $listedItems->getListedItemById($item);
    echo $response."</br>";
   

?>