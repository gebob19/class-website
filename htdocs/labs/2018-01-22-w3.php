<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 3',
      'attachments' => [
        '/assets/lab3/lab3.html',
      ],
    ];

    function component_content() { ?>

    <?php }

    layout_collection_single();
    exit();
}
