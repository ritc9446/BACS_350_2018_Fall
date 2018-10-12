<<<<<<< HEAD
<?php

    // Setup a page title variable
    $page_title = "PAGE TITLE";

    // Include the page start
    include 'header.php';

    // Include the main page content
    echo '<h1>BACS 350 - Project #8</h1><p>BODY</p>';

    require 'select.php';

    echo '<a href="insert.php">Add Record</a>';
    // Include the page end
    include 'footer.php';

 ?>
=======


<?php
    // Setup a page title variable
    $page_title = "Project 8";
    // Include the page start
    include 'header.php';
    // Include the main page content
    echo '<h1>MAIN TEXT</h1><p>BODY</p>';
    // Include the page end
    
	
/*
    // Form the DB Connection string
    $port = '3306';
    $dbname = 'tyzwprmy_subscribers';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
    $username = 'tyzwprmy_350';
    $password = 'password123';

    echo "<h1>DB Connection</h1>" .
        "<p>Connect String:  $db_connect, $username, $password</p>";


    // Open the database or die
    try {
        $db = new PDO($db_connect, $username, $password);
        echo '<p><b>Successful Connection</b></p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
    }
	*/
	
	include 'db.php';
	include 'select.php';
	include 'add.php';
	include 'add_form.php';
	?>

	
<?php
	include 'footer.php';
 ?>

>>>>>>> master
