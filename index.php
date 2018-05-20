<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css files/index.css">
    <link rel="stylesheet" href="css files/header.css">
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
    //Site visit counter
    include("classes/class_lib.php");
    $visitor = new Utilities();
    $response = $visitor->updateSiteVisitCounter();
    echo "You are visitor number:".$response;

    ?>
    <div class="container"><br>
    <div class="card" style="width: 45rem; height: 55rem; ">
    <div class="card-body">
    <h2 style="text-align: center; color: brown;"><b>Welcome to CommCourier</b></h2><br>
    <h5 style="text-align: center;"><b>Sign up! </b> or <a href="login.php"> Login here</a> </h5>
    <br>

    <form action="process.php" method="post">
      <!-- <form id="form1" name="form1" method="post" action="process.php" onsubmit="return AIM.submit(this, {'onStart' : start, 'onComplete' : finished})"> -->
    <center><span id="output" class="error"> </span></center></br>


    <div class="form-group row">

   <label for="fname" class="col-sm-4 col-form-label">First name</label>
   <div class="col-sm-8">
   <input type="text" class="form-control" id="fname" placeholder="" name="fname" required="true">
   </div>
   </div>

   <div class="form-group row">
   <label for="lname" class="col-sm-4 col-form-label">Last name</label>
   <div class="col-sm-8">
   <input type="text" class="form-control" id="lname" placeholder="" name="lname" required="true">
   </div>
   </div>

   <div class="form-group row">
   <label for="username" class="col-sm-4 col-form-label">Username</label>
   <div class="col-sm-8">
   <input type="text" class="form-control" id="username" placeholder="" name="username" required="true">
   </div>
   </div>

   <div class="form-group row">
   <label for="email" class="col-sm-4 col-form-label">Email address</label>
   <div class="col-sm-8">
   <input type="email" class="form-control" id="email" placeholder="" name="email" required="true">
   </div>
   </div>

 <div class="form-group row">
 <label for="password" class="col-sm-4 col-form-label">Password</label>
 <div class="col-sm-8">
 <input type="password" class="form-control" id="pword" placeholder="" name="pword" required="true">
 </div>
 </div>

 <div class="form-group row">
 <label for="cpword" class="col-sm-4 col-form-label">Confirm password</label>
 <div class="col-sm-8">
 <input type="password" class="form-control" id="cpword" placeholder="" name="cpword" required="true">
 </div>
 </div>

 <fieldset class="form-group">
 <div class="row">
 <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
 <div class="col-sm-10">
 <div class="form-check">
 <input class="form-check-input" type="radio" name="gender" id="genderF" value="Female">
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
 <input type="text" class="form-control" id="inputAddress" placeholder="House 346 maxwell lugbe" name="address" required="true">
 </div>
 </div>

  <div class="form-row">


  <div class="form-group col-md-6">
  <label for="inputcountry">Country</label>
  <select id="inputcountry" class="form-control" name="country" required="true">
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

 <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
 <div class="container-fluid">
 <div class="jumbotron jumbotron-fluid">
 <h2 id="aboutus" > Who we are </h2><br>
 <p id="aboutcontent">CommCourier stands for Community Courier. We are a start-up company geared towards providing information, computer and technology(ICT)-based business solutions.  Commcourier.com is one of such products. </p>
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

 </body>
 </html>



 <header>
  <div class="container">
