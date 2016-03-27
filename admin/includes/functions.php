<?php
	//echo "from functions.php";
	function submitMessage($direct, $name, $email, $message)
	{
//		echo "$name";
//		echo "$email";
//		echo "$message";
	$to = "contact@jakerdesigns.com";
	$subj = "Message from my site";
	$extra = "Reply-To: {$email}"; //so you can reply to the sender
	$msg = "Name: {$name}\n\nEmail: {$email}\n\nMessage: {$message}";
	//echo $msg;
	mail($to,$subj,$msg,$extra);
	$direct = $direct."?name={$name}";
	redirect_to($direct);
	}
	
	function redirect_to($direct) {
		if($direct != NULL) {
			header("Location: {$direct}"); //redirector in php
			exit;
		}
	}
	
?>