<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'In Class Problem Set 1',
      'attachments' => [
        '/assets/ps1/ps1.pdf',
        '/assets/ps1/ps1-soln.pdf',
      ],
    ];
    
    function component_content() { ?>

    <?php }

    layout_collection_single();
    exit();
}
