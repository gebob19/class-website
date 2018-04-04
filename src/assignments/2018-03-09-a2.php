<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Assignment 2',
      'attachments' => [
        '/assets/a2/a2.pdf',
      ],
    ];
    
    function component_content() { ?>
    
    <?php }

    layout_collection_single();
    exit();
}
