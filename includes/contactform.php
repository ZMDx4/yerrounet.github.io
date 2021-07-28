<?php	
	if (empty($_POST['fullname']) && strlen($_POST['fullname']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['request']) && strlen($_POST['request']) == 0)
	{
		return false;
	}
	
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$request = $_POST['request'];
	
	$to = 'zakaria@yerrou.net'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Yerrou.net website.";
	$email_body = "You have received a new message. \n\n".
				  "Fullname: $fullname \nEmail: $email \nRequest: $request \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: noreply@yerrou.net\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>