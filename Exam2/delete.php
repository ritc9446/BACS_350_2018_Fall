<?php
       
    // Prevent caching
    header("Pragma: no-cache");
    header("Expires: 0");
    header("Cache-Control: no-store, no-cache, must-revalidate");


    // Connect to the database
    require_once 'album.php';


    // Delete all records
    if ($album->clear()) {
          header("Location: index.php");
    }

?>
