<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'In Class Problem Set 3',
      'attachments' => [
        BASEURL . 'assets/ps3/ps3.pdf',
      ],
    ];
    
    function component_content() { ?>
    <?php }

    layout_collection_single();
    exit();
}
