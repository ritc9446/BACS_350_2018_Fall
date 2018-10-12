<?php

    // Decide on the domain and page to test
    $domain = "tyz.wpr.mybluehost.me";
    $page = "$domain/project/13-0/index.php";

		
	$domain = "http://tyz.wpr.mybluehost.me";
    $page = "$domain/project/13-0/index.php";
    $validator = "https://validator.w3.org/nu/";
    $href = "$validator?doc=$page";

        echo "<p>Validate Page: <a href=\"$href\">$href</a></p>"

?>