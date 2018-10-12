<?php
    // Connect to the database
    require_once 'db.php';
    
    // Add new record
    $date = filter_input(INPUT_GET, 'my_date');
    $text = filter_input(INPUT_GET, 'my_text');
    
    // Add database row
    $query = "INSERT INTO log (date, text) VALUES (:date, :text);";
    $statement = $db->prepare($query);
    $statement->bindValue(':date', $date);
    $statement->bindValue(':text', $text);
    $statement->execute();
    $statement->closeCursor();
    
    // Display Records
    require 'select.php';
?>