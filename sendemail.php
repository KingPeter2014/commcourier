<?php
include("header.php");
?>

 <form method="post" action="process.php">

  Email: <input name="email" type="text" />

  Subject: <input name="subject" type="text" />

  Message:

  <textarea name="message" rows="15" cols="40"></textarea>

  <input type="submit" value="Send To All" name="sendMailBtn" />
  </form>
  
<?php
  include('footer.php');
?>