<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1  shrink-to-fit=no">
    <title>Index page</title>
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
<<<<<<< HEAD
  </script>
  </head>
  <body>

    <!--The set of code below creates the navbar  -->
     <nav class="navbar navbar-light navbar-expand-sm fixed-top">
     <div class="container">
     <a  class="navbar-brand mr-auto" href="#">Commcourier</a>


        <!-- The code below creates the button that is formed when the menu bar is collapsed -->
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
     <span class="navbar-toggler-icon"></span>
     </button>

          <!-- The div below identifies the list item that should be collapsed -->
     <div class="collapse navbar-collapse" id="Navbar">
     <ul class="navbar-nav mr-auto">
     <li class="nav-item active"><a class="nav-link" href="#">Sign-Up</a></li>
     <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
     <li class="nav-item"><a class="nav-link" href="#">How to  navigate site</a></li>
     <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
     <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
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
=======
}
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=342627982815026&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  </head>
  <body>

  <header>
  <div class="imagelogo">
  <img src="images/picturelogo.PNG" alt="">
  <h6><i>Making money while journeying!!!</i></h6>
  </div>
  
  </header>


  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign Up</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="about" aria-selected="false">About Us</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Us</a>
  </li>
  </ul>
  <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<?php
>>>>>>> 25ca95d2c2b15f07c8e75716a456b40fa766a2e9
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
     <img src="picturelogo.Png" alt="" height="130" width="130">
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
      <label for="telephone" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b>Telephone</b></label>
      <div class="col-12 col-md-8 ">
      <input type="password" class="form-control form" id="telephone" name="telephone" placeholder="" required="true">
      </div>
      </div>

      <div class="form-group row ">
      <label for="address" class="col-xm-12 col-md-2  offset-md-1 col-form-label"><b>Home Address</b></label>
      <div class="col-12 col-md-8 ">
      <input type="password" class="form-control form" id="address" name="address" placeholder="" required="true">
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
<<<<<<< HEAD
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
        <li>  <a href="#"><span class="fas fa-home fa-lg"> </span> Home</a></li>
        <li>  <a href="#">Sign-up</a></li>
        <li>  <a href="#">login</a></li>
        <li>  <a href="#">How to Navigate site</a></li>
        <li>  <a href="#">About Us</a></li>
        <li>  <a href="#">Contact Us</a></li>
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
=======
  </div>
  <div class="form-group col-md-4">
  <label for="inputstate">State</label>
  <input type="text" class="form-control" id="inputstate" name="state" required="true">
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
 </div>

 <div class="fb-page" data-href="https://www.facebook.com/commcourier/" data-tabs="timeline" data-small-header="false"                   data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/commcourier/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/commcourier/">Community Courier</a></blockquote>
  </div>

 <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
 <div class="container-fluid">
 <div class="jumbotron jumbotron-fluid">
 <h2 id="aboutus" > Who we are </h2><br>
 <p id="aboutcontent">CommCourier stands for Community Courier. We are a start-up company geared towards providing connectivity between travelers and individuals who want to send an item in real-time. We believe that communal strength can help save money, time and live. </p>
 </div>
 </div>

 <div class="container-fluid">
 <div class="jumbotron jumbotron-fluid">
 <h2 id="aboutus" >What we do </h2><br>
 <p id="aboutcontent">Commcourier is a platform that connects verified travelers with verified senders wishing to send packages through the travelers.
  There are situations in life where an item or package needs to be sent in the next minute without waiting for scheduled parcel or cargo companies to
  take and transport the package. Our platform connects people in this situation with potential travelers who are going to such
  destination in real time. People with such intent list their intention and connect with verified travelers who can deliver
  such items immediately. The sender contributes to the transport fare of the traveler.</p>
 </div>
 </div>

 <div class="container-fluid">
 <div class="jumbotron jumbotron-fluid">
 <h2 id="aboutus" >Our goal </h2><br>
 <p id="aboutcontent">Our goal is to enable real-time courier services through the community as well as provide extra income for participants. </p>
 </div>
</div>

<div class="container-fluid">
<div class="jumbotron jumbotron-fluid">
<h2 id="aboutus" >How to Navigate the Site</h2><br>
<ul id="aboutcontent">
  <li>On the index page, <a href="index.php">Sign up</a></li>
  <li><a href="login.php">Log in</a>  using your email and password. This action leads you to the homepage</li>
  <li>On the homepage, to opt in as a traveler, click on the menu tab "<b>New Journey</b>"</li>
  <li>On the  homepage, to opt as a sender, click on the menu tab "<b>New Item</b>"</li>
  <li>To bid for an item as a traveler, click on "<b>See details</b>" besides the <b>Other listed items</b> located below the homepage menu bar</li>
  <li>If the sender accepts your bid, that sender assigns the item to you and sends you the offer to send the item. </li>
  <li> The traveler needs to accept the offer before the sender can go ahead to make payment</li>
  <li> After payment, a communication channel is established for Sender and traveler to meet for item pickup.</li>

</ul>
  <p id="aboutcontent">NOTE: Please you might encounter slight technical challenges while navigating through
  the site as the site is still under design,development and testing!</p>
</div>
</div>
</div>

 <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
 <div class="row">
 <div class="col-sm-6">
 <div class="card" id="maincontact">
 <div class="card-body" id="contact">
 <h5 class="card-title">Reach us on the following emails:</h5>
 <ul id="list">
 <li>commcourier@commcourier.com</li>
 <li>tochukwu.idika@commcourier.com</li>
 <li>peter.eze@commcourier.com</li>
 </ul>
 </div>
 </div>
 </div>

 <div class="col-sm-6">
 <div class="card" id= "maincontact">
 <div class="card-body" id="contact">
 <h5 class="card-title">Reach us on the following numbers:</h5>
 <ul id="list">
 <li>Tochi- +1 573 289 9576</li>
 <li>Peter- +61 469 716 871</li>
 <li>Chinazom- +234 703 924 7359</li>
 <li>Nonso- +234 803 925 1728</li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>


 <div class="fixed-bottom" id="foot">
 <footer >
 Copyright&copy;commcourier.com <br>
 <a href="#">Privacy policy</a> -
 <a href="#">Terms and condition</a>
 </footer>
 </div>

 <script src="scripts/colorchange.js"></script>
>>>>>>> 25ca95d2c2b15f07c8e75716a456b40fa766a2e9

 </body>
 </html>



 <header>
  <div class="container">
