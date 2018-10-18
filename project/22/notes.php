<?php

    // Bring in subscribers logic
    require_once 'notes_db.php';
    require_once 'notes_crud.php';
    require_once 'notes_views.php';


    // My Subscriber list
    class Notes {

        // Database connection
        private $db;

        
        // Automatically connect
        function __construct() {
            $this->db =  notes_connect();
        }

        
        // CRUD
        
        function query() {
            return query_notes($this->db);
        }
        
    
        function clear() {
            return clear_notes($this->db);
        }
        
        
        function add($title, $date, $body) {
            return add_notes ($this->db, $title, $date, $body);
        }
        
        function handle_actions() {
            $action = filter_input(INPUT_POST, 'action');
            if ($action == 'add') {
                $title  = filter_input(INPUT_POST, 'title');
                $body = filter_input(INPUT_POST, 'body');
                $date = date('l, F, d, Y g:i a');

                $this->add($title, $date, $body);
            }
            $action = filter_input(INPUT_GET, 'action');
            if ($action == 'clear') {
                $this->clear();
            }
        }
        
        // Views
        
        function show_notes() {
            notes_list_view($this->query());
        }
        
        
        function add_form() {
            add_notes_form();
        }
    }


    // Create a list object and connect to the database
    $notes = new Notes;

?>
