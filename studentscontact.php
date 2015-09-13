
<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = "Name: $name\r\n";
    $message .= "Email: $email\r\n";

	$to      = 'raks.garg@gmail.com';
	$subject = 'Gig Waiting List Request Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	if (!$name || !$ email) {
    	$res['message'] = 'All fields are required. Please go back and re-send your message.'
    	$status = FALSE; 
    }
    elseif (substr($email, -8) != 'ucla.edu') {
    	$res['message'] = "Sorry! We're currently only accepting UCLA students. Please sign up with your ucla.edu email address if you have one.";
    }
    else {
    	$status = mail($to, $subject, $message, $headers);
    }


	if($status == TRUE){	
		$res['sendstatus'] = 'done';
		$res['message'] = "You're all set!";
    }

	echo json_encode($res);
}

?>