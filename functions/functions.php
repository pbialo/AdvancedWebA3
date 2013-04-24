<?php
/*
    File Name: functions.php
    Author's name: Paul Bialo
    Web site name: Paul Bialo's Personal Portfolio
    File Description: Includes functions called.
*/

function get_contacts($db){
	$query = 'SELECT name, phone_number, address 
	FROM contacts 
	ORDER BY name ASC';
	$contacts_PDO = $db->query($query);
	$contacts = $contacts_PDO->fetchAll(PDO::FETCH_ASSOC);
	return $contacts;
}

function secure_password($password){
	$salt = sha1("black");
	$pepper = sha1("white");
	$secured_password = $salt . sha1($password) . $pepper;
	return $secured_password;
} 

