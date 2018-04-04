<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'In Class Problem Set 2',
      'attachments' => [
        '/assets/ps2/ps2.pdf',
      ],
    ];
    
    function component_content() {

    }

    layout_collection_single();
    exit();
}
