<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Start Journey</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>

    <?php if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

      //echo "<br/>Welcome:".$_SESSION['username'];
      ?>


  <div class="container"><br>
  <div class="card" style="width: 45rem; height: 45rem; ">
  <div class="card-body">
  <h3 style="text-align: center;"><b>New Travel Details</b></h3><br>
  <form action = "process.php" method = "POST" enctype = "multipart/form-data">
  <input type = "hidden" name = "uname" value = "<?php echo($_SESSION['username']); ?>"/>
  <select class="custom-select" name = "dep-country" required="true">
  <option value = "" selected>Choose your departure country</option>
  <option value="Nigeria">Nigeria</option>
  <option value="United States">United States</option>
  <option value="United Kingdom">United Kingdom</option>
  </select><br>
  <br>

  <select class="custom-select" name = "des-country" required="true">
  <option value = "" selected>Choose your destination country</option>
  <option value="Nigeria">Nigeria</option>
  <option value="United States">United States</option>
  <option value="United Kingdom">United Kingdom</option>
  </select><br>
  <br>

  <div class="form-group row">
  <label for="departuredate" class="col-sm-4 col-form-label">Departure date</label>
  <div class="col-sm-8">
  <input type="date" class="form-control" id="departuredate" name = "departuredate" placeholder="" required="true">
  </div>
  </div>

  <div class="form-group row">
  <label for="arrivaldate" class="col-sm-4 col-form-label">Arrival date</label>
  <div class="col-sm-8">
  <input type="date" class="form-control" id="arrivaldate" name = "arrivaldate" placeholder="" required="true">
  </div>
  </div>

  <div class="form-group row">
  <label for="arrivalport" class="col-sm-4 col-form-label">Arrival port</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="arrivalport" name = "arrivalport" placeholder="Murtala Mohammed Airport. " required="true">
  </div>
  </div>

  <div class="form-group row">
  <label for="travellernote" class="col-sm-4 col-form-label">Traveller Note</label>
  <div class="col-sm-8">
  <textarea class="form-control" id="travellernote" name = "travellernote" placeholder="Leave detailed note here for Item senders" name="Traveller Note"></textarea>
  </div>
  </div>

  <div class="form-group">
  <label for="traveldocument">Upload your travel document</label>
  <input type="file" class="form-control-file" id="traveldocument" name="fileToUpload">
  </div>

  <button type="submit" class="btn btn-primary col-md-2" id="Submit" name = "listjourneySubmitBtn">Submit</button>
  <button type="reset" class="btn btn-secondary col-md-2" id="Reset">Cancel</button>
  </form>

  </div>
  </div>
  </div>


  <footer>Copyright&copy;commcourier.com</footer>

  </body>
</html>
