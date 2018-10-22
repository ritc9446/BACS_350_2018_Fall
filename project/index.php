<?php

    require_once '../views.php';
 
    $site_title = 'BACS 350 - Demo Server';
    $page_title = 'Directory List';
    begin_page($site_title, $page_title);


    // Page Content Goes here
    
    // Include the main page content
    echo '<h1>Project List</h1><p>This demo show how to list all of the projects.</p>';


    // Define directory listing
    include '../files.php';

    // Get the files in the current directory
    $path = '.';
    $dirs = get_dir_list($path);

    // List the files as links
    if (count($dirs) == 0) {
        echo '<p>No files in list.</p>';
    } 
    else {
        echo '<ul>';

        foreach($dirs as $d) {
            if ($d != '.') {
                $url = $path . '/' . urlencode($d);
                echo '<li><a href="' . $url . '">' . $d . '</a></li>';
            }
        }

        echo '</ul>';
    }

     
    end_page();

?>
