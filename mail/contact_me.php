<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['attend']) 		||
   empty($_POST['guestcount']) 		||
   empty($_POST['guestname'])	||
   empty($_POST['meal'])	||
   empty($_POST['guestmeal'])	||
   empty($_POST['songname']))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$attend = $_POST['attend'];
$guestcount = $_POST['guestcount'];
$guestname = $_POST['guestname'];
$meal = $_POST['meal'];
$guestmeal = $_POST['guestmeal'];
$songname = $_POST['songname'];
	
// Create the email and send the message
$to = 'spkateregga@gmail.com; simon@checkli.com'; 
$email_subject = "Website RSVP Form:  $name";
$email_body = "You have received a new RSVP from your website.\n\n"."Here are the details:\n\nName: $name\n\nAttend: $attend\n\nGuest Count: $guestcount\n\nGuest Name: $guestname\n\nMeal: $meal\n\nGuest Meal: $guestmeal\n\nSong Name: $songname";
$headers = "From: noreply.simon@checkli.com\n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
