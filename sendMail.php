<?php // save this in a file called "sendMail.php"
//$to      = 'jmascot.com@gmail.com';
$to = 'fireburn@live.hk';
$subject = $_POST['subject'];
$message = str_replace("\n", "", $_POST['message']);
$headers = 'From: webmaster@jmascot.com' . "\r\n" .
    'Reply-To: webmaster@jmascot.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	if (mail($to, $subject, $message, $headers)) {
	  #echo("<p>Message successfully sent!</p>");
		header('Location:/mailsuccess.html');
	 } else {
	  #echo("<p>Message delivery failed...</p>");
	  header('Location:/mailfail.html');
	 }
?> 