<?php

    // Form the DB Connection string
    $port = '3306';
    $dbname = 'tyzwprmy_subscribers';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
    $username = 'tyzwprmy_350';
    $password = 'password123';

    // Open the database or die
    try {
        $db = new PDO($db_connect, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
    }

?>
