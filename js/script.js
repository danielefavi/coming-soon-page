/*
 * Made with <3 by www.danielefavi.com
 */

// this global variable keeps track if the #panel (where all the contacts and email form are placed) is open or closed
window.panelOpen = 0;

/*
 * This function changes the title size according to the window browser width
 * The title size changes only when the panel is open: when the window is greater that 780px the font-size is 60px;
 * when the window is less than 780px the font-size is dinamically calculated.
 * If the panel is open the title font size is fixed to 24px.
 */
function setTitleSize() {
	if (window.panelOpen == 0) {
		if ($(window).width() < 780) $("#title").css({ 'font-size': (60*$(".main-title").width()/780) });
		else $("#title").css({ 'font-size': 60 });
	}
}


/*
 * This function is fired when a user click the button SEND EMAIL
 * This function perfoms a ajax call to email.php
 * email.php will reply with a message (email sent or error) and this message will be placed in #result-message
 */
function send_mail_fnc() {
	$.ajax({
		type: "POST",
		url: "email.php",
		data: { 
				 name_name: $("#name-name").val()
				,email_contact: $("#email-contact").val()
				,email_body_message: $("#email-message").val()
		},
		success: function(msg) {
			$("#result-message").html("" + msg);
			if (msg == 'Message sent!') {
				$("#email-contact").val("");
				$("#email-message").val("");
			}
		},
		error: function() {
			$("#result-message").html("Something went wrong... Please try again.");
		}
	});
}


$(document).ready(function() {
	// setting the title font size when the page is loaded...
	setTitleSize();
	
	// setting the title font size on browser window resize
	$(window).resize(function() {
		setTitleSize();
	});
	
	// on contact button click
	$("#contacts-btn").click(function() {
		setTitleSize();
		
		$(this).toggleClass("active");
		
		if (window.panelOpen == 0) {
			// it sets #title to 24px when the contact is open
			$("#title").animate({fontSize:"24px"}, "slow");
			// and it hide #subtitle
			$("#subtitle").fadeOut("slow");
		}
		else {
			// it sets #title to 60px when the contact is open
			$("#title").animate({fontSize:"60px"}, "slow");
			// and it shows #subtitle
			$("#subtitle").fadeIn("slow");
		}
		
		// this toggle the #panel div where there are contacts and email form
		$("#panel").slideToggle("slow").promise().done(function() {
				setTitleSize();
			}
		);
		
		if (window.panelOpen == 0) window.panelOpen = 1;
		else window.panelOpen = 0;
		
		return false;
	});
	 
});