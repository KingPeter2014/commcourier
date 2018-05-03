<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
  <div class="card" style="width: 45rem; height: 50rem; ">
  <div class="card-body">
  <h2 style="text-align: center; color: brown;"><b>Welcome to CommCourier</b></h2><br>
  <h5 style="text-align: center;"><b>Sign up! </b> or <a href="login.php"> Login Here</a> </h5>
  <br>

 <form action="process.php" method="post">
  <div class="form-group row">

  <label for="fname" class="col-sm-4 col-form-label">First name</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="fname" placeholder="" name="fname">
  </div>
  </div>

  <div class="form-group row">
  <label for="lname" class="col-sm-4 col-form-label">Last name</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="lname" placeholder="" name="lname">
  </div>
  </div>

 <div class="form-group row">
 <label for="username" class="col-sm-4 col-form-label">Username</label>
 <div class="col-sm-8">
 <input type="text" class="form-control" id="username" placeholder="" name="username">
 </div>
 </div>

 <div class="form-group row">
 <label for="email" class="col-sm-4 col-form-label">Email address</label>
 <div class="col-sm-8">
 <input type="email" class="form-control" id="email" placeholder="" name="email">
 </div>
 </div>

 <div class="form-group row">
 <label for="password" class="col-sm-4 col-form-label">Password</label>
 <div class="col-sm-8">
 <input type="password" class="form-control" id="pword" placeholder="" name="pword">
 </div>
 </div>

 <div class="form-group row">
 <label for="cpword" class="col-sm-4 col-form-label">Confirm password</label>
 <div class="col-sm-8">
 <input type="password" class="form-control" id="cpword" placeholder="" name="cpword">
 </div>
 </div>

 <fieldset class="form-group">
 <div class="row">
 <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
 <div class="col-sm-10">
 <div class="form-check">
 <input class="form-check-input" type="radio" name="gender" id="genderF" value="Female" checked>
 <label class="form-check-label" for="gridRadios1">
    Female
 </label>
 </div>
 <div class="form-check">
 <input class="form-check-input" type="radio" name="gender" id="genderM" value="Male">
 <label class="form-check-label" for="gridRadios2">
    Male
 </label>
 </div>
 </div>
 </div>

 <div class="form-group row">
 <label for="inputTelephone" class="col-sm-4 col-form-label">Telephone</label>
 <div class="col-sm-8">
 <input type="tel" class="form-control" id="inputTelephone" placeholder="(000)-111-2222" name="telephone">
 </div>
 </div>

 <div class="form-group row">
 <label for="inputAddress" class="col-sm-4 col-form-label">Home address</label>
 <div class="col-sm-8">
 <input type="text" class="form-control" id="inputAddress" placeholder="House 346 maxwell lugbe" name="address">
 </div>
 </div>

  <div class="form-row">
  <div class="form-group col-md-4">
  <label for="inputstate">State</label>
  <input type="text" class="form-control" id="inputstate" name="state">
  </div>
  <div class="form-group col-md-6">
  <label for="inputcountry">Country</label>
  <select id="inputcountry" class="form-control" name="country">
    <option selected>Choose</option>
    <option>Nigeria</option>
    <option>Australia</option>
    <option>Canada</option>
    <option>Ghana</option>
    <option>United kingdom</option>
    <option>United states</option>
    <option>Italy</option>
    <option>Germany</option>
  </select>
  </div>
  <div class="form-group col-md-2">
  <label for="inputZip">Zip</label>
  <input type="text" class="form-control" id="inputZip" name="zip">
  </div>
  </div>

 <button type="submit" class="btn btn-primary col-md-2" id="Submit" name="signUpSubmitBtn">Submit</button>
 <button type="reset" class="btn btn-secondary col-md-2" id="Reset" name="signUpCancelBtn">Cancel</button>
 </form>
 </div>
 </div>
 </div>

 <footer>Copyright&copy;commcourier.com</footer>
 </body>
 </html>
