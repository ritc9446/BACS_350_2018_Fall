<?php

    // Bring in albums logic
    require_once 'album_db.php';
    require_once 'album_crud.php';
    require_once 'album_views.php';


    // My Album list
    class Album {

        // Database connection
        private $db;

        
        // Automatically connect
        function __construct() {
            $this->db =  album_connect();
        }

        
        // CRUD
        
        function query() {
            return query_album($this->db);
        }
        
    
        function clear() {
            return clear_album($this->db);
        }
        
        
        function add($artist, $name, $artwork, $purchase_url, $description, $review) {
            return add_album ($this->db, $artist, $name, $artwork, $purchase_url, $description, $review);
        }
        
        function handle_actions() {
            $action = filter_input(INPUT_POST, 'action');
            if ($action == 'add') {
                $artist = filter_input(INPUT_POST, 'artist');
                $name = filter_input(INPUT_POST, 'name');
                $artwork = filter_input(INPUT_POST, 'artwork');
                $purchase_url = filter_input(INPUT_POST, 'purchase_url');
                $description = filter_input(INPUT_POST, 'description');
                $review = filter_input(INPUT_POST, 'review');

                $this->add($artist, $name, $artwork, $purchase_url, $description, $review);
            }
            $action = filter_input(INPUT_GET, 'action');
            if ($action == 'clear') {
                $this->clear();
            }
        }
        
        // Views
        
        function show_album() {
            album_list_view($this->query());
        }
        
        
        function add_form() {
            add_album_form();
        }
    }


    // Create a list object and connect to the database
    $album = new Album;

?>
