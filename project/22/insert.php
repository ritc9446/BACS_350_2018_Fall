<?php

    // Connect to the database
    require_once 'notes.php';


    // Pick out the inputs
    $title  = filter_input(INPUT_POST, 'title');
    $body = filter_input(INPUT_POST, 'body');
    $date = date('l, F, d, Y g:i a');


    // Add record
    if ($notes->add ($title, $body, $date)) {
        header("Location: before.php");
    }

?>
