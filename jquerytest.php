<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>jQuery example: submit()</title>
        <style>
            form {
                text-align: center;
            }
            
            input {
                font-size: 16px;
                margin-top: 20px;
            }
            div#results{
            	width: 400px;
            	color: #998743
            	text-align: center;


            }
            
            /*
            first-child is used to select the first
            element in another element
            */
            p:first-child {
                width: 400px;
                text-align: center;
                margin:auto;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
    
    <div id="mainform">
    	<div id="results"></div>
<h2>Submit Form Using AJAX and jQuery</h2> <!-- Required div Starts Here -->
<div id="form">
<h3>Fill Your Information !</h3>
<div>
<label>Name :</label>
<input id="name" type="text">
<label>Email :</label>
<input id="email" type="text">
<label>Password :</label>
<input id="password" type="password">
<label>Contact No :</label>
<input id="contact" type="text">
<input id="submit" type="button" value="Submit">
</div>
</div>
</div>
    
    <script src="scripts/jquery-3.3.1.min.js"></script>
    <script> 
    
       $(document).ready(function(){
$("#submit").click(function(){
var name = $("#name").val();
var email = $("#email").val();
var password = $("#password").val();
var contact = $("#contact").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name + '&email1='+ email + '&password1='+ password + '&contact1='+ contact;
if(name==''||email==''||password==''||contact=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxSubmit.php",
data: dataString,
cache: false,
success: function(result){
//alert(result);
//$('#results').load("login.php");
$('#results').replacewith($('#results').html(result));
}
});
}
return false;
});
});
        
    </script>
    </body>
</html>
 <!-- Example created by Michael:
 https://www.khanacademy.org/profile/michael628 -->