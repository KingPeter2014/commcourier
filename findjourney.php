<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Find Journey Page</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>

  <header>
    <div class="imagelogo">
      <img src="images/picturelogo.png" alt="">
      <h6><i>Making money while journeying!!!</i></h6>
    </div>
  </header>

  <div class="container"><br>
  <div class="card" style="width: 45rem; height: 24rem; ">
  <div class="card-body">
  <h3 style="text-align: center;"><b>Search Traveller</b></h3><br>
  
  <form action = "process.php" method = "POST">
  <input type = "hidden" name = "uname" >
  <select class="custom-select" name = "dep-country">
  <option value = "" selected> Choose your start location</option>
  <option value="Nigeria">Nigeria</option>
  <option value="United States">United States</option>
  <option value="United Kingdom">United Kingdom</option>
  </select><br>
  <br>

  <select class="custom-select" name = "des-country">
  <option value = "" selected>Choose your destination location</option>
  <option value="Nigeria">Nigeria</option>
  <option value="United States">United States</option>
  <option value="United Kingdom">United Kingdom</option>
  </select><br>
  <br>

  <div class="form-group row">
  <label for="departuredate" class="col-sm-4 col-form-label">Depature date</label>
  <div class="col-sm-8">
  <input type="date" class="form-control" id="departuredate" name = "departuredate" placeholder="" name="departure date">
  </div>
  </div>

  <div class="form-group row">
  <label for="arrivaldate" class="col-sm-4 col-form-label">Arrival date</label>
  <div class="col-sm-8">
  <input type="date" class="form-control" id="arrivaldate" name = "arrivaldate" placeholder="" name="arrival date">
  </div>
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
