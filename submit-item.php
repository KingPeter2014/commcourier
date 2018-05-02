<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Start Journey Page</title>
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
  <div class="card" style="width: 45rem; height: 40rem; ">
  <div class="card-body">
  <h3 style="text-align: center;"><b>Submit Item</b></h3><br>
  <form action = "process.php" method = "POST">

    <div class="form-group row">
    <label for="iname" class="col-sm-4 col-form-label">Item name</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="iname" placeholder="" name="iname">
    </div>
    </div>

    <div class="form-group row">
    <label for="rname" class="col-sm-4 col-form-label">Receiver name</label>
    <div class="col-sm-8">
    <input type="email" class="form-control" id="rname" placeholder="" name="rname">
    </div>
    </div>

    <div class="form-group row">
    <label for="inputTelephone" class="col-sm-4 col-form-label">Receiver phone number</label>
    <div class="col-sm-8">
    <input type="tel" class="form-control" id="inputTelephone" placeholder="(000)-111-2222" name="telephone">
    </div>
    </div>

    <div class="form-group row">
    <label for="inputAddress" class="col-sm-4 col-form-label"> Receiver Address</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputAddress" placeholder="House 346 maxwell lugbe" name="address">
    </div>
    </div>

    <div class="form-group">
    <label for="itempicture">Upload the item picture</label>
    <input type="file" class="form-control-file" id="itempicture" name="ipicture">
    </div>

    <div class="form-group">
    <label for="personalpicture">Upload your photo</label>
    <input type="file" class="form-control-file" id="personalpicture" name="ppicture">
    </div>

    <div class="form-group">
    <label for="personalpicture">Upload a valid ID</label>
    <input type="file" class="form-control-file" id="personalpicture" name="ppicture">
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
