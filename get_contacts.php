<?php
/*
	File name: get_contacts.php
    Author's name: Paul Bialo
    Web site name: Paul Bialo's Personal Portfolio
    File description: Displays contacts if user logs in correctly.
*/

if (!isset($_SESSION['id'])){
	header('Location:admin.php');
}


require "functions/functions.php";
require "functions/db_pdo.php";
$contacts = get_contacts($db);
?>

 <div class="main-container">
    <div class="main wrapper clearfix">
		<ul>
			<?php
			// Shows each contact's name as a link. When clicked, an alert box with saved information is displayed
			foreach($contacts as $contact){ ?>
				 <a href="" onClick="alert('Name:                     <?php echo htmlentities($contact['first_name']) . ' ' . htmlentities($contact['last_name'])  .
				 						'\nPhone Number:     '. htmlentities($contact['phone_number']). 
				 						'\nAddress:                  '. htmlentities( $contact['address']); ?> ')"><?php echo htmlentities($contact['first_name']) . ' ' . htmlentities($contact['last_name']) . '<br>' ; ?></a>
			<?php }	?>
		</ul>
		<button type="button" value="logout" onClick = "javascript:location.href = 'logout.php';" >Logout</button>
	</div>
</div>
