<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 4',
      'attachments' => [
        BASEURL . 'assets/lab4/lab4.pdf',
        BASEURL . 'assets/lab4/lab4sol.pdf',
        BASEURL . 'assets/lab4/Use%20SQL%20on%20MathLab.html',
      ],
    ];

    function component_content() { ?>

    <?php }

    layout_collection_single();
    exit();
}
