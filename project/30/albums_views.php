<?php
    /*
        add_subscriber_form -- Create an HTML form to add record.
    */
    function add_albums_form() {
        
        echo '
            <div class="card">
                <h3>Add Music</h3>
            
                <form action="insert.php" method="post">
                
                    <p><label>Artist:</label> &nbsp; <input type="text" name="artist"></p>
                    <p><label>Name:</label> &nbsp; <input type="text" name="name"></p>
                    <p><label>Artwork:</label> &nbsp; <input type="text" name="artwork"></p>
                    <p><label>Purchase URL:</label> &nbsp; <input type="text" name="purchase_url"></p>
                    <p><label>Description:</label> &nbsp; <input type="text" name="description"></p>
                    <p><label>Review:</label> &nbsp; <input type="text" name="review"></p>
                    
                   
                   
                    
                    
                    
                    <p><input type="submit" value="Post"/></p>
                </form>
            </div>
            ';
        
    }
    
   
 
    function render_list($list) {
        echo '
            <div class="card">
                <h3 class="Music" >Your Music Library</h3> 
                </div>
            ';
        foreach ($list as $s) {
            echo ' <div class="songcard"><p class="info">' . $s['artist'] . '</p><p class="info">' . $s['name'] . '</p><br><img src="' . $s['artwork'] . '" class="cover"><br><ul><li><a href="' . $s['purchase_url'] . '">Buy This Song</a></li><li>' . $s['description'] . '</li><li>' . $s['review'] . '</li></ul></div>';
        }

    }
    
?>