<?php
error_reporting(0);

/*
 * Made with <3 by www.danielefavi.com
 */


// set here where the message has to be sent
$send_to_email = 'test@yourwebsite.gsd';
$website_name = 'YOURWEBSITE.COM';

// set here the messages
$messages = [
			 'success' => 'Message sent!'
			,'error_generic' => 'Error occurred sending the message... please try again.'
			,'error_empty_message' => 'The message is empty!'
			,'error_wrong_email' => 'The email is not correct!'
			,'error_email_required' => 'The email is required!'
		];

$email = trim($_POST['email_contact']);
$email_body = trim($_POST['email_body_message']);



if (!empty($email)) {
	if (isValidEmail($email)) {
		if (!empty(trim($email_body))) {
			
			if (empty($_POST['name_name'])) {
				$subject = "Message from $website_name";
				$body_message = "
					<strong>Message from $website_name</strong>
					<br /><br />
					FROM: " . $email . "
					<br />
					MESSAGE: " . addslashes($email_body) . "
				";
				
				$res = sendEmail($send_to_email, $send_to_email, $website_name, $body_message, $subject);
				//$res = true; // for testing
				if ($res) echo $messages['success'];
				else echo $messages['error_generic'];
			}
			
		}
		else echo $messages['error_empty_message'];
	}
	else echo $messages['error_wrong_email'];
}
else echo $messages['error_email_required'];
		


function sendEmail($to_email, $from_email, $from_name, $message, $subject) {
    
        if (isValidEmail($to_email) and isValidEmail($from_email)) {
        
            $message = nl2br($message);
                    
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            $headers .= 'From: ' . $from_name . ' <' . $from_email . '>' . "\r\n" . 'Reply-To: ' . $from_email;
        
            $sendmail = mail( $to_email, $subject, $message, $headers );

            if ($sendmail) return true;
            
        }
    
        return false;
}



function isValidEmail($email) {
    $myEmail = filter_var(filter_var($email, FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);
    if ($myEmail != null) return true;
    return false;
}