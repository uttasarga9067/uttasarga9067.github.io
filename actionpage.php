<?php
	$name = $POST['name']
	$emailid = $POST['emailid']
	$subject = $POST['subject']
	$message = $POST['message']
	
	$email_from = 'uttasargasingh9067@gmail.com';
	$email_subject = 'New Visitor'
	$email_body = "User Name: $name.\n".
						"User Email: $emailid.\n".
							"User Subject: $subject.\n"
								"User Message: $message.\n";
	
	$to = "uttasargasingh9067@gmail";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($to, $email_subject, $email_body, $headers);
	
	header("Location: contact.html");
	
?>