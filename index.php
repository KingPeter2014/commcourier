<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1  shrink-to-fit=no">
    <title>Community Courier</title>
    <link rel="stylesheet" href="css files/index2.css">
    <link href="https://fonts.googleapis.com/css?family=Kirang+Haerang|Lobster|Oleo+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
    function start(){
    $('span#output').html(' Possible Authentication error. Try again!')
    }
    function finished(s){
    if(s.indexOf("success")!=-1){
    s1=s.split(":");
    if(s1[0]=="success"){//&& s1[1].toLowerCase()=="dvcAdmin"
    $('span#output').html('<img src="images/loading.gif"> Preparing for first time use...');
    //Boxy.load('/highacademia/configure.php',{title:'Configure your Institution',afterHide:function(){location.href='home.php';}});
    }else{
    location.href='login.php';
    }
    }else {
    s1=s.split(":");
    if(s1[0]=="error"){$('span#output').html('<div class="warning-bar">'+s1[1]+'</div>');}
   }
   }
   </script>
   <script>(function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=342627982815026&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
  </head>
  <body>

    <!--The set of code below creates the navbar  -->
     <nav class="navbar navbar-light navbar-expand-sm fixed-top">
     <div class="container">
     <a  class="navbar-brand mr-auto" href="login.php">Commcourier</a>


      <!-- The code below creates the button that is formed when the menu bar is collapsed -->
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
     <span class="navbar-toggler-icon"></span>
     </button>

      <!-- The div below identifies the list item that should be collapsed -->
     <div class="collapse navbar-collapse" id="Navbar">
     <ul class="navbar-nav mr-auto">
     <li class="nav-item active"><a class="nav-link" href="index.php">Sign-Up</a></li>
     <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
     <li class="nav-item"><a class="nav-link" href="howtonavigate.php">How to  navigate site</a></li>
     <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
     <li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>
     </ul>
     </div>
     </div>
     </nav>

     <!--  This set of code handles the header-->
     <header class="jumbotron" id="jumb1">
     <div class="container">
     <div class="row">
     <div class="col-12  col-sm-10">
     <?php
    //Site visit counter
     include("classes/class_lib.php");
     $visitor = new Utilities();
     $response = $visitor->updateSiteVisitCounter();
     echo "You are visitor number:".$response;

     ?>
     <h2>Welcome to CommCourier</h2>
     <p>Our mission  is to connect travelers and individuals who want to send packages to the same destination, in real-time. The intention is to reduce latency in item delivery as well as help travelers make some money.</hp>
     </div>
     <div class="col-12 col-sm offset-sm-0.5">
     <img src="images/picturelogo.PNG" alt="">
     </div>
     </div>
     </div>
     </header>

     <!--These set of codes handles the content page  -->
      <div class="container-fluid content">
      <div class="row ">
      <div class="col-sm-7 order-sm-last wrap">
      <form action="process.php" method="post">
        <br>
      <h2 >SignUp Form</h2>

      <div class="form-group row" >
      <label for="fname" class=" col-12 col-md-2 offset-md-1 col-form-label"><b>First Name</b></label>
      <div class="col-12  col-md-8 " >
      <input type="text" class="form-control form" id="fname" name="fname" placeholder="" required="true">
      </div>
      </div>

      <div class="form-group row ">
      <label for="lname" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b>Last Name</b></label>
      <div class="col-12 col-md-8 ">
      <input type="text" class="form-control form" id="lname" name="lname" placeholder="" required="true">
      </div>
      </div>

      <div class="form-group row ">
      <label for="dob" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b>Date of Birth</b></label>
      <div class="col-12 col-md-8 ">
      <input type="date" class="form-control form " id="dob" name="dob" placeholder="" required="true">
      </div>
      </div>

      <div class="form-group row ">
      <label for="username" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b>Username</b></label>
      <div class="col-12 col-md-8 ">
      <input type="text" class="form-control form" id="username" name="username" placeholder="" required="true">
      </div>
      </div>

      <div class="form-group row ">
      <label for="email" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b>Email Address</b></label>
      <div class="col-12 col-md-8 ">
      <input type="text" class="form-control form" id="email" name="email" placeholder="" required="true">
      </div>
      </div>

      <div class="form-group row ">
      <label for="pword" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b>Password</b></label>
      <div class="col-12 col-md-8 ">
      <input type="password" class="form-control form" id="pword" name="pword" placeholder="" required="true">
      </div>
      </div>

      <div class="form-group row ">
      <label for="cpword" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b>Confirm Password</b></label>
      <div class="col-12 col-md-8 ">
      <input type="password" class="form-control form" id="cpword" name="cpword" placeholder="" required="true">
      </div>
      </div>

      <fieldset class="form-group">
      <div class="row">
      <legend class="col-form-label col-xm-12 col-md-2  offset-md-1 pt-0"><b>Gender</b></legend>
      <div class="col-12 col-sm-8">
      <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="genderF" value="Female">
      <label class="form-check-label" for="gridRadios1">
        <b>  Female</b>
      </label>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="genderM" value="Male">
      <label class="form-check-label" for="gridRadios2">
      <b>Male</b>
      </label>
      </div>
      </div>
      </div>
      </fieldset>

      <div class="form-group row ">
      <label for="telephone" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b>Telephone Number</b></label>
      <div class="col-5 col-md-3 ">
      <input type="tel" class="form-control form" id="countrycode" name="countrycode" placeholder="Country code" required="true">
      </div>
      <div class="col-7 col-md-5 ">
      <input type="tel" class="form-control form" id="telephone" name="telephone" placeholder="Tel. number" required="true">
      </div>
      </div>

      <div class="form-group row ">
      <label for="address" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b>Home Address</b></label>
      <div class="col-12 col-md-8 ">
      <input type="text" class="form-control form" id="address" name="address" placeholder="" required="true">
      </div>
      </div>

      <div class="form-row">
      <div class="form-group col-md-4 offset-md-1">
      <label for="inputcountry"><b>Country</b></label>
      <select id="inputcountry" class="form-control form" name="country" required="true">
      <option selected>Choose</option>
      <?php
      //Load all the Countries in the World
      require_once("classes/class_lib.php");
      $countries = new Utilities();
      $response = $countries->loadCountries();
      echo $response;
      ?>
      </select>
      </div>
      <div class="form-group col-md-4">
      <label for="inputstate"><b>State</b></label>
      <input type="text" class="form-control form" id="inputstate" name="state" required="true">
      </div>
      <div class="form-group col-md-2">
      <label for="inputZip"><b>Zip</b></label>
      <input type="text" class="form-control form" id="inputZip" name="zip">
      </div>
      </div>

      <button type="submit" class="btn btn-primary col-md-4 offset-md-1 form" id="Submit" name="signUpSubmitBtn"><b>Submit</b></button>
      <button type="reset" class="btn btn-secondary col-md-4 offset-md-1 form" id="Reset" name="signUpCancelBtn"><b>Cancel</b></button>
      <br>
      <br>
      </div>
      </form>

      <div class="col-sm order-sm-first wrap2">
      <div class="row ">
      <div class="col-sm side-content1">
      <div class="row justify-content-center">
      <h2>Why Register?</h2>
      </div>
      </div>
      </div>

      <div class="row">
      <div class="col-sm side-content2">
      <div class="row justify-content-center">
      <ul class="list-unstyled">
      <li>You have access to the homepage </li>
      <li>You get information about site updates</li>
      <li>You have free usage till June 2019</li>
      </ul>
      </div>
      </div>
      </div>

      <div class="row side-content3">
      <div class="col-sm">
      <div class="row justify-content-center">
      <p>Register and enjoy the benefits of doing business with us</p>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>

      <!--This set of code handles the footer.  -->
        <footer>
        <div class="container">
        <div class="row">
        <div class="col-6 col-sm-4">
        <h5>Menu Links</h5>
        <ul class="list-unstyled">
        <li>  <a href="login.php"><span class="fas fa-home fa-lg"> </span> Home</a></li>
        <li>  <a href="index.php">Sign-up</a></li>
        <li>  <a href="login.php">login</a></li>
        <li>  <a href="howtonavigate.php">How to Navigate site</a></li>
        <li>  <a href="aboutus.php">About Us</a></li>
        <li>  <a href="contactus.php">Contact Us</a></li>
        </ul>
        </div>

        <div class="col-6 col-sm-4">
        <h5>Social Media</h5>
        <ul class="list-unstyled">
        <li>  <a href="https://www.facebook.com/commcourier" target="_blank"> <i class="fab fa-facebook-square fa-lg"> </i> Facebook</a></li>
        <li>  <a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
        <li>  <a href="#"><i class="fab fa-linkedin"></i> linkedin</a></li>
        <li>  <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a></li>
        </ul>
        </div>

        <div class="col-12 col-sm-4 align-self-center">
        <div class="text-center">
        <h5>Company Policy</h5>
        <ul class="list-unstyled" >
        <li>  <a href="#">Privacy Policy</a></li>
        <li>  <a href="#">Terms and condition</a></li>
        </ul>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-12 col-auto">
        <div class="row justify-content-center">
        <p>Copyright &copy; commcourier.com</p>
        </div>
        </div>
        </div>
        </div>
        </footer>

      <script src="scripts/colorchange.js"></script>
 </body>
 </html>
