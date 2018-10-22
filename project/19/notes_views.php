<?php

    /*
        add_subscriber_form -- Create an HTML form to add record.
    */

    function add_notes_form() {
        
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
        
    }


    
    /*
        render_list -- Loop over all of the subscribers to make a bullet list
    */
 
    function render_list($list) {

        echo '
            <div class="card">
                <h3>Notes in List</h3> 
                <ul>
            ';
        foreach ($list as $s) {
            echo '<li>' . $s['title'] . ', ' . $s['body'] . ', ' . $s['date'] . '</li>';
        }
        echo '
                </ul>
            </div>';
    
    }
    

?>