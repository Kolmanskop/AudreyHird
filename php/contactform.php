<?php 
	// Message Vars
	$errorMsg = '';
	$msgClass = '';

	// Check if these details were submitted by clicking the "Submit" button
	if (isset($_POST['submit'])) {
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$subject = htmlspecialchars($_POST['subject']);
		$mailFrom = htmlspecialchars($_POST['mail']);
		$message = htmlspecialchars($_POST['message']);

		// Check Required Fields (Empty)
		if(!empty($name) && !empty($mailFrom) && !empty($message)){	
			// Check Email
			if(filter_var($mailFrom, FILTER_VALIDATE_EMAIL) === false){
				// If Failed - Display the Error Message
				$errorMsg = 'Please use a valid E-mail address';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$mailTo = "eugene@anysupport.co.uk";
				$headers = "From: ".$mailFrom;
				$txt = "You have received an e-mail from ".$name.".\n\n".$message;


		mail($mailTo, $subject, $txt, $headers);
		header("Location: index.php?mailsend");
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}	
	}
?>