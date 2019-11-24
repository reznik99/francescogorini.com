<?php
  ini_set('display_errors', 1); error_reporting(E_ALL);
	if (isset($_POST["name"], $_POST["email"], $_POST["message"])){
		$name = $_POST["name"];
		$sender = $_POST["email"];
		$msg = $_POST["message"];
		$recipient = "goras.francesco@gmail.com";
		$headers = "From: francescogorini.com \r\n";
	    $headers .= "Reply-To: $sender \r\n";
		$headers .= "Return-Path: francescogorini.com\r\n";

		if (mail($recipient, "francescogorini.com message from ".$name, $msg, $headers)) {
            echo "Message accepted";
        }
        else {
            echo "Error: Message not accepted";
        }
	}
?>
