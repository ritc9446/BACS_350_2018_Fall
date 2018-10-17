<?php
    
    // Prevent caching
    header("Pragma: no-cache");
    header("Expires: 0");
    header("Cache-Control: no-store, no-cache, must-revalidate");


    // Connect to the database
    require_once 'notes.php';


    // Pick out the inputs
    $title  = filter_input(INPUT_POST, 'title');
    $body = filter_input(INPUT_POST, 'body');
    $date = date('l, F, d, Y g:i a');


    // Add record
    if ($notes->add ($title, $body, $date)) {
//      echo '<p><b>Insert successful</b>&nbsp;<a href="index.php">Subscribers</a></p>';
//      $this->query();
        header("Location: index.php");
    }

?>

