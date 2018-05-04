<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>Pay out page</title>
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
    <div class="card" style="width: 45rem; height: 21rem; ">
    <div class="card-body">
    <h3 style="text-align: center;"><b>Pay Here</b></h3><br>

    <form action = "process.php" method = "POST" enctype = "multipart/form-data">
      <select class="custom-select custom-select-lg mb-3" name = "des-country">
      <option value = "" selected>Choose your traveller</option>
      <option value="MS">Micheal smith</option>
      <option value="SI">Shaibu Ibrahim</option>
      <option value="CI">Chuks Ifeanyi</option>
      </select><br>
      <br>

      <button type="submit" class="btn btn-primary col-md-2" id="Submit" name = "listjourneySubmitBtn">Pay</button>
      <button type="reset" class="btn btn-secondary col-md-2" id="Reset">Cancel</button>
    </form>
    </div>
    </div>
    </div>
    <footer>Copyright&copy;commcourier.com</footer>
  </body>
</html>