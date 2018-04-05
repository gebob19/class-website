<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lecture 12',
      'attachments' => [
        '/assets/lecture/w11/getexample.html',
        '/assets/lecture/w11/httpgetRequest.php',
        '/assets/lecture/w11/populate.php',
        '/assets/lecture/w11/php_mysql.ppt',
      ],
    ];
    
    function component_content() { ?>
      <h2 id="lecture-material">Lecture Material</h2>
  
      <ul>
        <li>
          <p>Wrapping up PHP</p>
        </li>
        <li>
          <p>Review of Web Servers</p>
        </li>
        <li>
          <p>Review of HTTP protocol</p>
        </li>
        <li>
          <p>HTTP Get requests in PHP</p>
        </li>
        <li>
          <p>Demo of Web Server  and connecting to the web server using different clients such as mobile/ and browser from laptops</p>
        </li>
        <li>
          <p>In the demo, I showed how to add/remove users and how to the website responds to these changes on the database.</p>
        </li>
      </ul>
  
      <h2 id="in-class-readings">Readings and Lecture Code</h2>
    <?php }

    layout_collection_single();
    exit();
}
