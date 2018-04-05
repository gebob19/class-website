<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Assignments',
      'collection' => [
        (object) [
          'path' => '/assignments/2018-02-09-a1.php',
          'title' => 'Assignment 1',
        ],
        (object) [
          'path' => '/assignments/2018-03-09-a2.php',
          'title' => 'Assignment 2',
        ],
        (object) [
          'path' => '/assignments/2018-03-24-a3.php',
          'title' => 'Assignment 3',
        ],
      ],
    ];

    function component_content() { ?>
    
    <?php }

    layout_collection_list();
    exit();
}
