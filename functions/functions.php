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
	$query = "SELECT * 
		FROM users 
		WHERE username = '$username'";
	$login = $db->prepare($query);
	$login->execute(array($username));
	$user = $login->fetch(PDO::FETCH_ASSOC);
	if ($user['password']== $password){
		return true;
	}
	else{
		return false;
	}

}

function mobile_check_login($username, $password, $db){
	$query = "SELECT * 
		FROM users 
		WHERE username = '$username'";
	$login = $db->prepare($query);
	$login->execute(array($username));
	$user = $login->fetch();
	if ($user['password']== $password){
		return true;
	}
	else{
		return false;
	}

}
