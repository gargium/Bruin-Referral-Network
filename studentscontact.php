
<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = "Name: $name\r\n";
    $message .= "Email: $email\r\n";

    $message = wordwrap($message, 72);


	$to      = 'raks.garg@gmail.com';
	$subject = 'Gig General Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){
		$res['sendstatus'] = 'done';

		//Edit your message here
		$res['message'] = 'Form Submission Successful';
    }
	else{
		$res['message'] = 'Failed to send mail. Please mail me to you@example.com';
	}


	echo json_encode($res);
}

?>