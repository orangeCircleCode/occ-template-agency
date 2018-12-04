<?php
//error_reporting(0);
$result = "";
$error = "";
if (isset($_POST["submit"])) {
	if (empty($_POST['name'])) {
		$error = "<br />Please enter your name";
	}
	if (empty($_POST['email'])) {
		$error .= "<br />Please enter your email address";
	}
	if (empty($_POST['phone'])) {
		$error .= "<br /> Please enter your phone number";
	}
	if (empty($_POST['message'])) {
		$error .= "<br />Please enter a message";
	}
	if ($_POST['email'] != "" and !filter_var(
		$_POST['email'],
		FILTER_VALIDATE_EMAIL
	)) {
		$error .= "<br />Please enter a valid email address";
	}
	if (!empty($error)) {
		$result = '<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>' . $error . '</div>';
	} else {
		$headers = "From: info@youragencydomain.com" . "\r\n";
		$mailed = mail(
			"info@youragencydomain.com",
			"Contact Message",
			"Name: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\nPhone: " . $_POST['phone'] . "\nMessage: " . $_POST['message'],
			$headers
		);
		if ($mailed) {
			$result = '<div class="alert alert-success" align="center"> <strong> Thanks for contacting us</strong> - We\'ll get back to you shortly.</div>';
		} else {
			$error = '<div class="alert alert-danger" align="center">Sorry, there was
                an error sending your message. Please try again later.</div>';
		}
	}
}
?>
