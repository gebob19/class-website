<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 9',
      'attachments' => [
        '/assets/lab9/Let’s get some PHP.pdf',
      ],
    ];
    
    function component_content() {?>
    <?php }

    layout_collection_single();
    exit();
}
