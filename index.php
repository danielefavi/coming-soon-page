<?php
/*
 * Made with <3 by www.danielefavi.com
 */

$website_name = 'YOURWEBSITE.COM';
$email_address = 'info@yourbebsite.com';
$skype_contact = 'your.skype';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title><?php echo $website_name; ?> - Coming Soon!</title>

		<meta name="description" content="<?php echo $website_name; ?>, coming soon, stay tuned!" />
		<meta name="keywords" content="" />
		<meta name="author" content="<?php echo $website_name; ?>" />

		<link rel="stylesheet" type="text/css" href="css/style.css" />
		
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,600,800' rel='stylesheet' type='text/css'>
		
		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
	</head>
	<body id="gradient">
		
		<div class="wrapper">

			<div id="panel">
				<div class="grid grid-pad">
					<div class="col-4-12">
						<div class="content">
							<h3>Contacts</h3>
							
							<div class="contact-detail">
								<p class="label">E-Mail:</p>
								<p class="detail">
 									<a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a> 
								</p>
							</div>
							
							<div class="contact-detail">
								<p class="label">Skype:</p>
								<p class="detail">
									<?php echo $skype_contact; ?>
								</p>
							</div>
							
							<div class="clear"></div>
						</div>
					</div>
					<div class="col-8-12">
						<div class="content">
 							 <h3>Or send me a message</h3>
 							 
 							 <p class="label">Your email</p>
 							 <input class="input" name="email-contact" id="email-contact" value="" />
 							 
 							 <input type="text" name="name-name" id="name-name" value="" />
 							 
 							 <p class="label">Message</p>
 							 <textarea class="input message" name="email-message" id="email-message"></textarea>
							 
							 <input type="button" value="Send" name="send-button" id="send-button" class="btn btn-4 btn-4a" onclick="send_mail_fnc()" />
							 <span id="result-message"> </span>
							 
						</div>
					</div>
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div id="top-panel">
				<a href="#" id="contacts-btn" class="btn btn-4 btn-4a">Contact Me</a>
				<div class="clear"></div>
			</div>
			
			<div class="content">
				<div class="main-title">
					<h1 id="title" class="title-normal"><?php echo $website_name; ?></h1>
					<h2 id="subtitle">
						<span class="thin">Coming soon...</span>
					</h2>
				</div>
			</div>

		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>