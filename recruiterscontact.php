
<?php

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$company = $_POST['company'];

	$to      = 'raks.garg@gmail.com';
	$subject = 'Gig Recruiters Contact Form';

    $email_body = "Name: $name\r\n" ;
    $email_body .=  "Email: $email\r\n";
    $email_body .= "Company: $company\r\n";
    $email_body .= "Message: $message\r\n";

	$headers = 'From: '. $email . "\r\n" . 'Reply-To: '. $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();

	if (!$name || !$email || !$message || !$company ) {
    	$res['message'] = 'All fields are required. Please go back and re-send your message.';
    	$status = FALSE; 
    }
    else {
    	$status = mail($to, $subject, $email_body, $headers);
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