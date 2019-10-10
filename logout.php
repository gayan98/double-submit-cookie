<?php
	session_start();
	session_unset();
	session_destroy();
	unset($_COOKIE['sessionCookie']);
	setcookie('PHPSESSID', '', time() - 3600, '/');
    setcookie('sessionCookie', '', time() - 3600, '/');

	header("Location:index.php");
   	exit;


?>