<?php

    // Start the page
    require_once 'views.php';
 
    $site_title = 'BACS 350 - Lesson 22';
    $page_title = 'Objects for Data';
    begin_page($site_title, $page_title);


    // Page Content
    echo '<p><a href="..">Solutions</a></p>';
    echo '<p><a href="pagelog.php">Page Log</a></p>';
    
    
    // Bring in subscribers logic
    require_once 'notes.php';
    

    // Log the page load
    require_once 'log.php';
    
    $log->log_page("notes/index.php");


    // Add record from form
    $notes->handle_actions();


    // Render a list of subscribers
    $notes->show_notes();


    // Show the add form
    $notes->add_form();


    // Clear the list by sending "action" of "clear" to this view
    echo '<p><a href="index.php?action=clear" class="btn">Clear Notes</a></p>';


    end_page();
?>
