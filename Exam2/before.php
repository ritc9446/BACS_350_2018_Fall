<?php

    // Start the page
    require_once 'views.php';
 
    $site_title = 'BACS 350 - Exam 2';
    $page_title = 'Exam 2';
    begin_page($site_title, $page_title);


    // Page Content
    echo '<p><a href="card.php">Card View</a></p>';
    echo '<p><a href="pagelog.php">Page Log</a></p>';
    
    
    // Bring in album logic
    require_once 'album.php';
    

    // Render a list of albums
    $album->show_album();


    // Show the add form
    echo '
            <div class="card">
                <h3>Add Album</h3>
                <form action="insert.php" method="post">
                    <p><label>Artist:</label> &nbsp; <input type="text" name="artist"></p>
                    <p><label>Name:</label> &nbsp; <input type="text" name="name"></p>
                    <p><label>Artwork:</label> &nbsp; <input type="text" name="artwork"></p>
                    <p><label>Purchase URL:</label> &nbsp; <input type="text" name="purchase_url"></p>
                    <p><label>Description:</label> &nbsp; <input type="text" name="description"></p>
                    <p><label>Review:</label> &nbsp; <input type="text" name="review"></p>
                    <p><input type="submit" value="Add Album"/></p>
                </form>
            </div>
    ';


    end_page();
?>
