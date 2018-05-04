<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
    <meta charset="utf-8">
    <title>Comm courier home page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="jquery-3.3.1.min.js"></script>
  </head>
  <body>
<?php if (session_status() == PHP_SESSION_NONE) {
		session_start();
    $username = $_SESSION['username'];
}
  ?>

<!--  This section of the code creates the navbar containing the home, actors etc-->
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container"> 
        <a class="navbar-brand" href="#">CommCOURIER</a> <div> <?php echo "<br/>Welcome:".$username;?></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
             <li class="nav-item">
                 <a class="nav-link" href="listjourney.php">New Journey</a>
             </li>

             <li class="nav-item">
                <a class="nav-link" href="submit-item.php">New Item</a>
             </li>
			 <li class="nav-item">
                <a class="nav-link" href="logout.php">Log out</a>
             </li>

             <!-- This portion of the code creates the dropdown menu called Actors -->
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Actors
               </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://localhost/commcourier/listjourney.php">Transporter</a>
                <a class="dropdown-item" href="#">Sender</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Receiver if needed will be here </a>
              </div>
            </li>
			
          </ul>

          <!--This portion of the code creates the search button-->
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
   </nav> 
	
 

     <div id="centralcontainer" style="top:15rem;" class="card" style="width: 45rem; height: 40rem; ">
      <h1> <font color="red"> Use JQuery to load all contents to this div dynamically. Use $("#centralcontainer").load("filename.php");</font> </h1>
    </div>

   
	
  </body>
</html>
