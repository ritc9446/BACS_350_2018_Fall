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
    

    // Render a list of subscribers
    $notes->show_notes();


    // Show the add form
    echo '
            <div class="card">
                <h3>Add Note</h3>
            
                <form action="insert.php" method="post">
                    <p><label>Title:</label> &nbsp; <input type="text" name="title"></p>
                    <p><label>Body:</label> &nbsp; <input type="text" name="body"></p>
                    <p><input type="submit" value="Add Note"/></p>
                </form>
            </div>
    ';


    end_page();
?>
