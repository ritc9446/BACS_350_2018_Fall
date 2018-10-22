<?php

/* --------------------------------------      

SQL for Table

-- Create table subscribers: id, name, email --

CREATE TABLE subscribers (
  id int(3) NOT NULL AUTO_INCREMENT,
  name varchar(100)  NOT NULL,
  email varchar(100) NOT NULL,
  PRIMARY KEY (id)
);

-------------------------------------- */

    // Connect to the remote database
    function remote_connect() {

        $port = '3306';
        $dbname = 'uncobacs_subscribers';
        $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
        $username = 'uncobacs_350';
        $password = 'BACS_350';
        return db_connect($db_connect, $username, $password);

    }


    // Local Host Database settings
    function local_connect() {

        $host = 'localhost';
        $dbname = 'bacs350';
        $username = 'root';
        $password = '';
        $db_connect = "mysql:host=$host;dbname=$dbname";
        return db_connect($db_connect, $username, $password);

    }


    // Open the database or die
    function db_connect($db_connect, $username, $password) {
        
//        echo "<h2>DB Connection</h2><p>Connect String:  $db_connect, $username, $password</p>";
        try {
            $db = new PDO($db_connect, $username, $password);
//             echo '<p><b>Successful Connection</b></p>';
            return $db;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }

    }


    // Open the database or die
    function connect_database() {
        
        $local = ($_SERVER['SERVER_NAME'] == 'localhost');
        if ($local) {
            return local_connect();
        } 
        else {
            return remote_connect();
        }
        
    }

?>
