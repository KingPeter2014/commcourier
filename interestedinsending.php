<?php
include("header.php");

if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $username = $_SESSION['username'];
    $item = $_GET['item'];
    ?>

    <link rel="stylesheet" href="css files/header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="card-body">
    <?php //require_once('config.php'); ?>
    <h3 style="text-align: center;"><b>Bid to Send Item</b></h3><br>

    <form action="process.php" method = "POST" enctype = "multipart/form-data">
      <input type = "hidden" name = "item" value = "<?php echo $item; ?>"/>
      <input type = "hidden" name = "bidder" value = "<?php echo $username; ?>"/>
      <input type = "number" name = "amount" placeholder="Cost of Sending"/>
      <select class="custom-select custom-select-lg mb-3" name = "journey">
      <option value = "" selected>Choose your journey</option>
      <?php
      	require_once("classes/class_lib.php");
      	$getjourneys = new Journeys();
		$response = $getjourneys->getActiveJourniesForCurrentUser($username);
		echo $response;

      ?>

      </select><br>

      <button type="submit" class="btn btn-primary col-md-2" id="Submit" name = "bidToSendItemBtn">Send Bid</button>
      <button type="reset" class="btn btn-secondary col-md-2" id="Reset">Cancel</button>
    </form>
    </div>

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
