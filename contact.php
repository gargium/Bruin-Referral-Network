
<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    

	$to      = 'raks.garg@gmail.com';
	$subject = 'Gig General Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if (!$name || !$ email || !$message) {
    	$res['message'] = 'All fields are required. Please go back and re-send your message.'
    	$status = FALSE; 
    }
    else {
    	$status = mail($to, $subject, $message, $headers);
    }


	if($status == TRUE){	
		$res['sendstatus'] = 'done';
		$res['message'] = 'Form Submission Successful';
    }
	else{
		$res['message'] = 'Form submission failed. Please email me at raks.garg@gmail.com';
	}
	 
	
	echo json_encode($res);
}

?>