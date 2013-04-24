<?php
/*
	File name: login.php
    Author's name: Paul Bialo
    Web site name: Paul Bialo's Personal Portfolio
    File description: Called when login button is pressed. Calls the check_login function.
*/

session_start();
require "functions/functions.php";

if (isset($_POST['username']) && isset($_POST['password'])){
	require "functions/db_pdo.php";
	mobile_check_login($_POST['username'], ($_POST['password']), $db);
}