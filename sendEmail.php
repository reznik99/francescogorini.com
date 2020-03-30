<?php
  //ini_set("display_errors", 1); error_reporting(E_ALL);
	if (isset($_POST["name"], $_POST["email"], $_POST["message"])){
		//save variables
		$name = $_POST["name"];
		$sender = $_POST["email"];
		$msg = $_POST["message"];
		$recipient = "goras.francesco@gmail.com";

		//create mail headers
		$headers = "From: portfolio\r\n";
	    $headers .= "Reply-To: $sender \r\n";
		$headers .= "Return-Path: francescogorini.com\r\n";

		if(isset($_POST["recaptcha_response"])) {

			// Build request:
			$recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
			$recaptcha_secret = "your-server-key";
			$recaptcha_response = $_POST["recaptcha_response"];

			// Send request and decode response:
			$recaptcha = file_get_contents($recaptcha_url."?secret=".$recaptcha_secret."&response=".$recaptcha_response);
			echo $recaptcha;
			$recaptcha = json_decode($recaptcha);

			if ($recaptcha->success == true) {
				if (mail($recipient, "Message from ".$name, $msg, $headers)) {
					http_response_code(202); // (Accepted) Email sent!
				} else {
					http_response_code(500); //Error: (Internal Error) Email not sent.
				}
			} else {
				http_response_code(403); //Error: (Forbidden) Email not sent. Captcha FAILED!
			}
		} else {
			http_response_code(403); //Error: (Forbidden) Email not sent. Captcha FAILED!
		}
	}
?>
