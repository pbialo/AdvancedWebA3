<?php 
/*
	File name: logout.php
    Author's name: Paul Bialo
    Web site name: Paul Bialo's Personal Portfolio
    File description: Called when logout button is pressed. Kills the session and redirects back to log-in.
*/

session_start();
session_destroy();

header("Location: admin.php")
?>