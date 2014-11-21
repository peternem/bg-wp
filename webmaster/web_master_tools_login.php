<?php

// Your private infomation
$username = "webmaster";
$password = "mp!@";
$redirect_file_name = "web_master_tools.php";

//// Bad Login
if (!isset ($_SERVER['PHP_AUTH_USER'])){
	header("WWW-Authenticate: Basic realm=\"Mode Webmaster Tools\"");
	header("HTTP/1.0 401 Unauthorized");
	include 'web_master_tools_bad_login.php'; 
	exit;
}
//// Good Login
else {
	// split the user/pass parts
	list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) = explode(':' , base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));

	if (($_SERVER['PHP_AUTH_USER']== $username) && ($_SERVER['PHP_AUTH_PW']== $password)){
		header("Location: $redirect_file_name");
		// set cookie the expiration date to one hour ago
		setcookie ("ronjermie", "", time() - 3600);
	}
	//// Bad Login if password entered incorrectly.
	else {
		header("WWW-Authenticate: Basic realm=\"Mode Webmaster Tools\"");
		header("HTTP/1.0 401 Unauthorized");
		include 'web_master_tools_bad_login.php'; 
		header("Location: web_master_tools_bad_login.php");
		//exit;
		}
}


?>
