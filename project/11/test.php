<?php

    // Decide on the domain and page to test
    $domain = "tyz.wpr.mybluehost.me";
    $page = "$domain/project/11/index.php";

    // Create a link for the page
    echo "<h2>Test Page for $page</h2>

	$domain = "http://tyz.wpr.mybluehost.me";
    echo "<p>domain = $domain</p>";


$page = "$domain/project/11/index.php";
echo "<p>page = $page</p>";


$validator = "https://validator.w3.org/nu/";
echo "<p>validator = $validator</p>";

$href = "$validator?doc=$page";
echo "<p>href = $href</p>";

        echo "<a href=\"$href\">Validate Page: $href</a>"

?>