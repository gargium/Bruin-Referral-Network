
<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$company = $_POST['company'];

	$to      = 'raks.garg@gmail.com';
	$subject = 'Gig Recruiters Contact Form';

    $email_body = 'Name: $name\r\n' ;
    $email_body .=  'Email: $email\r\n'; 
    $email_body .= 'Company: $company\r\n'; 
    $email_body .= 'Message: $message\r\n'

	$headers = 'From: '. $name . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $email_body, $headers);

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