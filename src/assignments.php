<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Assignments',
      'collection' => [
        (object) [
          'path' => '/assignments/2018-02-09-a1.html',
          'title' => 'Assignment 1',
        ],
        (object) [
          'path' => '/assignments/2018-03-09-a2.html',
          'title' => 'Assignment 2',
        ],
      ],
    ];

    function component_content() { ?>
    
    <?php }

    layout_collection_list();
    exit();
}
