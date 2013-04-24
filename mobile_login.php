<?php
/*
	File name: mobile_login.php
    Author's name: Paul Bialo
    Web site name: Paul Bialo's Personal Portfolio
    File description: Called when login button is pressed. Calls the mobile_check_login function.
*/

session_start();
require "functions/functions.php";
require "functions/db_pdo.php";
if (check_login($_POST['username'], $_POST['password'], $db) == true){
	$_SESSION['id'] = 1;
	$_SESSION['login_fail'] = 0;
	header('Location: mobile_get_contacts.php');
	}
	else {
		$_SESSION['login_fail'] = 1;
		header('Location: mobile_get_contacts.php');
	}	