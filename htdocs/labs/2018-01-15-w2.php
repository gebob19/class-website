<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 2',
      'attachments' => [
        '/assets/lab2/lab2.pdf',
      ],
    ];

    function component_content() { ?>
      <ul>
        <li>Review of Relational Algebra.</li>
      </ul>
    <?php }

    layout_collection_single();
    exit();
}
