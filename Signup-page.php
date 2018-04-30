<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Commcourier - Sign up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
  </head>
  <body>

      <!--This portion of the code creates the title- welcome to the sign up page  -->
    <div class="container">
      <div class="jumbotron">
        <center><img src = "images/cclogo.png"/> </center><br/>
		<h3 style="text-align: center;"><font color = 'orange'>CommCourier </font> - Sign up!</h3>
        <br>

     <!--  This section of code creates the form containing first and last name, email, password etc  -->
    <form action="process.php" method="post">
        <div class="row">
          <div class="col-md-6">
           <input type="text" class="form-control" placeholder="First name" id="fname" name="fname"><span class="error">*<?php  echo "";?></span>
          </div>
          <div class="col-md-6">
           <input type="text" class="form-control" placeholder= "Last name" id="lname" name="lname">
         </div>
       </div>
    <br>
      <div class="row">
        <div class="col-md-6">
         <input type="text" class="form-control" placeholder="Username" id="username" name="username">
       </div>
      <div class="col-md-6">
        <input type="email" class="form-control" placeholder= "Email" id="email" name="email">
     </div>
    </div>
  <br>
    <div class="row">
     <div class="col-md-6">
      <input type="password" class="form-control" placeholder="Password" id="pword" name="pword">
     </div>
     <div class="col-md-6">
      <input type="password" class="form-control" placeholder="Comfirm Password" id="cpword" name="cpword">
     </div>
   </div>
    <br>
    <!--  This portion of code handles the gender selection-->
    <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
           <div class="col-sm-10">
             <div class="form-check">
               <input class="form-check-input" type="radio" name="gender" id="gender" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                  Female
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                Male
              </label>
            </div>
          </div>
        </div>
<br>
      <!--This portion of code handles the telephone and address form  -->
    <div class="form-group row">
      <label for="inputTelephone" class="col-sm-2 col-form-label">Telephone</label>
        <div class="col-sm-10">
         <input type="tel" class="form-control" id="inputTelephone" placeholder="(000)-111-2222" name="telephone">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
         <input type="text" class="form-control" id="inputAddress" placeholder="House 346 maxwell lugbe" name="address">
      </div>
    </div>
     <!--This portion of the code handles the state and the country  -->
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputState">State</label>
          <input type="text" class="form-control" id="inputState" name="state">
      </div>
      <div class="form-group col-md-6">
         <label for="inputCountry">Country</label>
            <select id="inputCountry" class="form-control" name="country">
              <option selected>Choose...</option>
              <option>Nigeria</option>
              <option>Australia</option>
              <option>Canada</option>
              <option>Ghana</option>
              <option>United kingdom</option>
              <option>Spain</option>
              <option>Italy</option>
              <option>Germany</option>
          </select>
      </div>
	</div> 
	<div class="form-row">
      <div class="form-group col-md-6">
          <input type="Submit" class="form-control" id="btnSubmit" name="signUpSubmitBtn">
      </div>
      <div class="form-group col-md-6">
         <input type="Reset" class="form-control" id="btnCancel">
      </div>
	</div>  
   </form>

<style media="screen">
  body{
    background-color: gray;
  }
</style>

    </div>
  </div>

  </body>
</html>