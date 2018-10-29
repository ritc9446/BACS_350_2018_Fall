<?php

    // Start the page
    require_once 'views.php';
 
    $site_title = 'BACS 350 - Exam 2';
    $page_title = 'Exam 2';
    begin_page($site_title, $page_title);


    // Page Content
   // echo '<p><a href="card.php">Card View</a></p>';
    echo '<p><a href="pagelog.php">Page Log</a></p>';
    
    
    // Bring in albums logic
    require_once 'album.php';
    

    // Log the page load
    require_once 'log.php';
    
    $log->log_page("album/index.php");


    // Add record from form
    $album->handle_actions();


    // Render a list of albums
   // $album->show_album();
    $album->show_cards();


    // Show the add form
    $album->add_form();


    // Clear the list by sending "action" of "clear" to this view
    echo '<p><a href="index.php?action=clear" class="btn">Clear Albums</a></p>';


    end_page();
?>
