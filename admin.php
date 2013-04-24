<!DOCTYPE html>
<!--
	File name: admin.php
    Author's name: Paul Bialo
    Web site name: Paul Bialo's Personal Portfolio
    File description: HTML home page
-->
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Home - Paul Bialo's Personal Portfolio</title>
        <meta name="description" content="Paul Bialo's Personal Portfolio">
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <link type="text/css" rel="stylesheet" href="css/slider.css">

        <script src="js/detectmobilebrowser.js"></script>
		<script src="js/jquery-1.9.0.min.js"></script>

       <!-- #main  <script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script> -->
        <script src="js/slides.min.jquery.js"></script>
    </head>

    <body>
        <div class="header-container">
            <header class="wrapper clearfix">
                <img src="img/logo.gif" alt="PB logo">              
                <nav>
                    <ul>
                        <li><a href="admin.php" class="active">Admin</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="http://www.github.com/pbialo">GitHub</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="index.html">Home</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div class="main-container">
            <div class="main wrapper clearfix">
                <h1>Admin Log-in</h1>           
            </div>

        <?php 
        require "functions/pdo.php";
        require "functions/functions.php";
        $contacts = get_contacts($db);
        foreach($contacts as $contact){
            echo "<tr>";
                echo "<td>" . $contact['name'] . "</td>";
                echo "<td>" . $contact['phone_number']. "</td>";
                echo "<td>" . $contact['address']. "</td>";
            echo "</tr>";
        }
        ?>
        </div>
        <div class="footer-container">
            <footer class="wrapper">
                <h3>Copyright © 2013 Paul Bialo</h3>
            </footer>
        </div>
    </body>
</html>
