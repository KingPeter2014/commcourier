



<?php

include("header.php");

 if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $jny = $_GET['journey'];
    include("classes/class_lib.php");
     $journey = new Journeys();
    $response = $journey->getJourneyById($jny);
    echo $response."</br>";


?>

<div class="fixed-bottom">
    <footer>
    Copyright&copy;commcourier.com
    <br>
    <a href="#">Privacy policy</a> -
    <a href="#">Terms and condition</a>
    </footer>
    </div>

  </body>
</html>
