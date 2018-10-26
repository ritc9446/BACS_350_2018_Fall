<?php
    // add_album_form -- Create an HTML form to add record.
    function add_album_form() {
        
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
        
    }


    // album_list_view -- Loop over all of the albums to make a bullet list
    function album_list_view($list) {

        echo '
            <div class="card">
                <h3>Albums in List</h3> 
                <ul>
            ';
        foreach ($list as $s) {
            echo '<li>' . $s['artist'] . ', ' . $s['name'] . ', ' . $s['artwork'] . ', ' . $s['purchase_url']
                 . ', ' . $s['description'] . ', ' . $s['review'] . '</li>';
        }
        echo '
                </ul>
            </div>';
    
    }

?>
