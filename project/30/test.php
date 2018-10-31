
<?php
 require_once 'views.php';
 $site_title = 'BACS 350 - Exam 2';
$page_title = 'Music Manager App';
 begin_page($site_title, $page_title);

     // Decide on the domain and page to test
    $project = "test2";
    $domain = "http://adam1400.com";
    $page = "$domain/BACS350/exams/$project/index.php";
    

     // Create a link for the page
    echo "<h2>Test Page for $page</h2>
        
        <p>Make sure that the page exists and has valid HTML.";
     echo '<h3>Page Exists</h3>
        <p><a href="' . $page . '">' . $page . '</a></p>';

     // Run your page through the validator
    echo '<h3>Valid HTML</h3>';
    echo '<p><a href="https://validator.w3.org/check?uri=http%3A%2F%2Fadam1400.com%2FBACS350%2Fexam2%2Findex.php&charset=%28detect+automatically%29&doctype=Inline&group=0">HTML Validator</a></p>';
      
        
?>