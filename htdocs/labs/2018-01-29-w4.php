<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 4',
      'attachments' => [
        '/assets/lab4/lab4.pdf',
        '/assets/lab4/lab4sol.pdf',
        '/assets/lab4/Use%20SQL%20on%20MathLab.html',
      ],
    ];

    function component_content() { ?>

    <?php }

    layout_collection_single();
    exit();
}
