<?php
/*
    File Name: functions.php
    Author's name: Paul Bialo
    Web site name: Paul Bialo's Personal Portfolio
    File Description: Includes the functions called
*/

function get_contacts($db){
	$query = "SELECT first_name, last_name, phone_number, address
	FROM contacts 
	ORDER BY last_name ASC";
	$get_contacts_PDO = $db->query($query);
	$contacts = $get_contacts_PDO->fetchAll(PDO::FETCH_ASSOC);
	return $contacts;
}

function check_login($username, $password, $db){
	$query = "SELECT username, password	FROM users";
	$login = $db->query($query);
	$users = $login->fetchAll(PDO::FETCH_ASSOC);
	foreach($users as $user){ 
		if (($user['password'] == $password) && ($user['username'] == $username)) {
			return true;
		}
	}
}

function mobile_check_login($username, $password, $db){
	$query = "SELECT username, password	FROM users";
	$login = $db->query($query);
	$users = $login->fetchAll(PDO::FETCH_ASSOC);
	foreach($users as $user){ 
		if (($user['password'] == $password) && ($user['username'] == $username)) {
			return true;
		}
	}
}