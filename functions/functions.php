<?php
/*
    File Name: functions.php
    Author's name: Paul Bialo
    Web site name: Paul Bialo's Personal Portfolio
    File Description: Includes the functions called
*/

function get_contacts($db){
	$query = 'SELECT name, phone_number, address 
		FROM contacts 
		ORDER BY name ASC';
	$contacts_PDO = $db->query($query);
	$contacts = $contacts_PDO->fetchAll(PDO::FETCH_ASSOC);
	return $contacts;
}

function check_login($username, $password, $db){
	$query = "SELECT id, username, password 
		FROM users 
		WHERE username=?";
	$login_PDO = $db->prepare($query);
	$login_PDO->execute(array($username));
	$user = $login_PDO->fetch(PDO::FETCH_ASSOC);

	if ($user['username'] == $username && $password == $user['password']){
		$_SESSION['id'] = 12312312;
		$_SESSION['login_fail'] = 0;
		header('Location: admin.php');
	}
	else{
		$_SESSION['login_fail'] = 1;
		header('Location: admin.php');
	}
}

function mobile_check_login($username, $password, $db){
	$query = "SELECT id, username, password 
		FROM users 
		WHERE username=?";
	$login_PDO = $db->prepare($query);
	$login_PDO->execute(array($username));
	$user = $login_PDO->fetch(PDO::FETCH_ASSOC);

	if ($user['username'] == $username && $password == $user['password']){
		$_SESSION['id'] = 12312312;
		$_SESSION['login_fail'] = 0;
		header('Location: mobile.html#page6');
	}
	else{
		$_SESSION['login_fail'] = 1;
		header('Location: mobile.html#page6');
	}
}