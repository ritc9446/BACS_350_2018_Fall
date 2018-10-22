<?php

    // Start the page
    require_once 'views.php';
 
    $site_title = 'BACS 350 - Project 19 (Notes)';
    $page_title = 'Objects for Data';
    begin_page($site_title, $page_title);


    // Page Content
    echo '<p><a href="..">Solutions</a></p>';
    echo '<p><a href="milestones.php">Milestones</a></p>';

    
    // Bring in subscribers logic
    require_once 'notes.php';


    // Render a list of subscribers
    $notes->show_notes();
    

    // Show the add form
    $notes->add_form();


    // Button to clear
    echo '<a href="delete.php">Reset Notes</a>';


    end_page();
?>
