<?php

    // Start the page
    require_once 'views.php';
 
    $site_title = 'BACS 350 - Exam 2';
    $page_title = 'Music Manager App';
    begin_page($site_title, $page_title);
    // Page Content
    
    require_once 'log.php';
    $log->log_page("exams/test2.index.php");
    
    // Bring in albums logic
    require_once 'albums.php';
    // Render a list of albums
    $albums->show_albums();
    
    // Show the add form
    $albums->add_form();
    // Button to clear
    echo '<a href="delete.php">Reset albums</a>';
    echo '<br>';
    echo '<a href="http://adam1400.com/BACS350/exams/test2/pagelog.php">View Page Log</a>';
    echo '<br>';
    echo '<a href="test.php">Validator</a>';

    
    
    end_page();
    
    
?>