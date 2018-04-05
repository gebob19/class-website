<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 10',
      'attachments' => [
        '/assets/lab10/lab10 Exercise.pdf',
        '/assets/lab10/SignedIn.php',
        '/assets/lab10/SignIn.php',
        '/assets/lab10/SignOut.php',
      ],
    ];
    
    function component_content() {?>
      <p> How to host your page on mathlab </p>
      <p> PHP Login Page (session) </p>
    <?php }

    layout_collection_single();
    exit();
}
