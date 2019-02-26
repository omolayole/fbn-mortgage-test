<?php
	
	$name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

	echo "Your message was received. " . $name . " We will get back to you soon. Thank you.";

?>