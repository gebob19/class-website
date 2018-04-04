<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 6',
      'attachments' => [
        '/assets/lab6/lab6.pdf',
        '/assets/lab6/starterHTML.html',
      ],
    ];
    
    function component_content() { ?>
      <p>Download and open the html file using a text editor.</p>
    <?php }

    layout_collection_single();
    exit();
}
