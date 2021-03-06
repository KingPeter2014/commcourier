<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1  shrink-to-fit=no">
    <title>Change Password</title>
    <link rel="stylesheet" href="css files/login.css">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
       <li class="nav-item "><a class="nav-link" href="index.php">Sign-Up</a></li>
       <li class="nav-item active"><a class="nav-link" href="login.php">Login</a></li>
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
       <h2>Welcome to CommCourier</h2>
       <p>Our mission  is to connect travelers and individuals who want to send packages to the same destination, in real-time. The intention is to reduce latency in item delivery as well as help travelers make some money.</hp>
       </div>
       <div class="col-12 col-sm offset-sm-0.5">
       <img src="images/picturelogo.PNG" alt="">
       </div>
       </div>
       </div>
       </header>

       <div class="container-fluid content">
       <div class="container wrap">

       <div class="row row1">
       <div class="col-12">
       <h1>Change Password</h1>
       <hr id="line">
       </div>
       </div>

       <div class="row row4">
       <div class="col-12 col-md-7 offset-md-2">
       <form action="process.php" method="post" class="main">
       <br>
       <div class="form-group row ">
       <label for="pword" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b> Current Password</b></label>
       <div class="col-12 col-md-8 ">
       <input type="password" class="form-control form" id="currentpword" name="currentpword" placeholder="" required="true">
       </div>
       </div>

       <div class="form-group row ">
       <label for="pword" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b>New Password</b></label>
       <div class="col-12 col-md-8 ">
       <input type="password" class="form-control form" id="newpword" name="newpword" placeholder="" required="true">
       </div>
       </div>

       <div class="form-group row ">
       <label for="pword" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b>Confirm New Password</b></label>
       <div class="col-12 col-md-8 ">
       <input type="password" class="form-control form" id="cpword" name="cpword" placeholder="" required="true">
       </div>
       </div>

       <div class="form-group row">
       <div class="col-md-10 offset-md-1">
       <div class="form-check">
       <input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
       <label class="form-check-label" for="approve">
       <strong>Keep me logged in </strong>
       </label>
       </div>
       </div>
       </div>

       <button type="submit" class="btn btn-primary col-12 col-md-4 offset-md-3 form" id="Submit" name="changePwordBtn"><b>Change Now</b></button>
       <button type="reset" class="btn btn-secondary col-12 col-md-4   form" id="Reset" name="CancelBtn"><b>Cancel</b></button>
       <br>
       </form>
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
         <li>  <a href="#"><span class="fas fa-home fa-lg"> </span> Home</a></li>
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
