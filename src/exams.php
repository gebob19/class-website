<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Exams',
      'collection' => [
        (object) [
          'path' => '/exams/2018-02-05-midterm.html',
          'title' => 'Midterm Information',
        ],
      ],
    ];

    function component_content() {

    }

    layout_collection_list();
    exit();
}
