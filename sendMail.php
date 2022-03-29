<?php
 
    $subject=$_POST['subject'];
    $from_email=$_POST['email'];
	
    $message = '<html><body style="border:5px solid black;border-radius: 5px; border-color:#99ccff; border-style: groove;">';
    $message .= '<center><h1>Smart Water</h1></center>';
	$message .= '<table rules="all" style="border-color: #8585ad; cellpadding="10"; width: 100%;" >';
	$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['fname']) .' '.strip_tags($_POST['lname']). "</td></tr>";
	$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
	$message .= "<tr><td><strong>Mobile:</strong> </td><td>" . strip_tags($_POST['mobile']) . "</td></tr>";
	$message .= "<tr><td><strong>Comment:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";

	$to_email = "abdullah.spgc3424@gmail.com";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: ' .$from_email . "\r\n".  
  		  		'X-Mailer: PHP/' . phpversion();


// Sending email
if (mail($to_email, $subject, $message, $headers)) {
    echo "Email successfully sent to $to_email...";
    header("Location:contact_us.php");
} else {
    echo "Email sending failed...";
}

?>