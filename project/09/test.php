<?php

    // Decide on the domain and page to test
    $domain = "https://unco-bacs.org";
    $page = "$domain/bacs_350/demo/index.php";

    // Create a link for the page
    echo "<h2>Test Page for $page</h2>
        <p>Start simple but start now.</p>
        <p>Make sure that the page exists and has valid HTML.";

    echo '<h3>Page Exists</h3>
        <p><a href="' . $page . '">' . $page . '</a></p>';

    // Run your page through the validator
    echo '<h3>Valid HTML</h3>
        <p><a href="http://validator.w3.org">HTML Validator</a></p>';
        
     echo '<h3>Valid HTML</h3>
        <p><a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Funco-bacs.org%2Fbacs_350%2Fdemo%2Findex.php">HTML Validator</a></p>';
		
		
		
	$domain = "unco-bacs.org";
    echo "<p>domain = $domain</p>";


$page = "$domain/bacs_350/demo/index.php";
echo "<p>page = $page</p>";


$validator = "https://validator.w3.org/nu/";
echo "<p>validator = $validator</p>";

$href = "$validator?doc=$page";
echo "<p>href = $href</p>";



        echo '<h3>Valid HTML</h3>
        <p><a href="$href">HTML Validator</a></p>';

?>