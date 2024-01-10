<?php 

$errors = '';
$myemail = 'info@carcuro.in';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
	empty($_POST['email']) ||
	   empty($_POST['phone']) ||
	    empty($_POST['service']) || 
   
   empty($_POST['comment']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$email = $_POST['email']; 
$phone = $_POST['phone'];
$subject = $_POST['service'];
$comment = $_POST['comment'];

 
 

	$to = $myemail; 
	$email_subject = "Contact Inquiry From: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email \n Phone: $phone \n Subject: $subject  \n Comment: $comment "; 
	
	$headers = "From: info@carcuro.in"; 
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location:thanks.html');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>