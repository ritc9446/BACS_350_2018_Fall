<?php

    // Setup a page title variable
    $page_title = "Project 11";

    // Include the page start
    include 'header.php';

    // Include the main page content
    echo '<h1>BACS 350 - Project #11</h1>';

    require 'db.php';
    require 'insert.php';
    require 'test.php';

    // Include the page end
    include 'footer.php';

 ?>
