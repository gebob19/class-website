<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 5',
      'attachments' => [
        '/assets/lab5/lab5.pdf',
      ],
    ];

    function component_content() { ?>

    <?php }

    layout_collection_single();
    exit();
}
