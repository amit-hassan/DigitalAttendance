<?php
	$to = 'azimrifath@gmail.com';
	$subject = 'Test';
	$message = 'gudmarani';
	$headers = 'From: nubauthority@gmail.com';
	if(mail($to,$subject,$message,$headers))
		echo "Email Sent";
	else
		echo "Email sending failed";



?>