<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Assignment 1',
      'attachments' => [
        '/assets/a1/a1.pdf',
      ],
    ];
  
    function component_content() { ?>
      <p>Due date: 9th February @ 11:59pm on MarkUs.</p>

      <p>Edit at 6:55pm on January 28th. See Piazza Post @17</p>
    <?php }

    layout_collection_single();
    exit();
}
