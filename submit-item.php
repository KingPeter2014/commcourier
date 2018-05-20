


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List item</title>
    <link rel="stylesheet" href="css files/header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>


  <?php if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
     // echo "<br/>Welcome:".$_SESSION['username'];?>
     
<div class="container">
  <div class="card" style="width: 45rem; height: 40rem; ">
  <div class="card-body">
  <h3 style="text-align: center;"><b>List Item to Send</b></h3><br>
  <form action = "process.php" method = "POST" enctype = "multipart/form-data">
    <input type = "hidden" name = "uname" value = "<?php echo($_SESSION['username']); ?>"/>
    <div class="form-group row">
    <label for="iname" class="col-sm-4 col-form-label">Item name</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="iname" placeholder="" name="iname" required="true">
    </div>
    </div>

    <div class="form-group row">
    <label for="rname" class="col-sm-4 col-form-label">Receiver name</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="rname" placeholder="" name="rname" required="true">
    </div>
    </div>

    <div class="form-group row">
    <label for="inputTelephone" class="col-sm-4 col-form-label">Receiver phone number</label>
    <div class="col-sm-8">
    <input type="tel" class="form-control" id="inputTelephone" placeholder="(000)-111-2222" name="tphone" required="true">
    </div>
    </div>

    <div class="form-group row">
    <label for="inputAddress" class="col-sm-4 col-form-label"> Receiver Address</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputAddress" placeholder="347 Maxwell Street Karu, Post code: 3098" name="address" required="true">
    </div>
    </div>

    <div class="form-group row">
    <label for="travellernote" class="col-sm-4 col-form-label">Sender Note</label>
    <div class="col-sm-8">
    <textarea class="form-control" id="travellernote" name = "senderernote" placeholder="Leave a note here for TRansporter "></textarea>
    </div>
    </div>

    <div class="form-group">
    <label for="itempicture">Upload the item picture</label>
    <input type="file" class="form-control-file" id="itempicture" name="itempicture" required="true" >
    </div>


   <button type="submit" class="btn btn-primary col-md-2" id="Submit" name = "listitemSubmitBtn">Submit</button>
   <button type="reset" class="btn btn-secondary col-md-2" id="Reset">Cancel</button>
   </form>

  </div>
  </div>
  </div>

   <?php
    include("footer.php");
?>
