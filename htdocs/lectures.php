<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lectures',
      'collection' => [
        (object) [
          'path' => '/lectures/2018-01-01-quiz-soln.php',
          'title' => 'In Class Quiz Solutions',
        ],
        (object) [
          'path' => '/lectures/2018-01-08-lec1.php',
          'title' => 'Lecture 1',
        ],
        (object) [
          'path' => '/lectures/2018-01-15-lec2.php',
          'title' => 'Lecture 2',
        ],
        (object) [
          'path' => '/lectures/2018-01-15-ps1.php',
          'title' => 'In Class Problem Set 1',
        ],
        (object) [
          'path' => '/lectures/2018-01-22-lec3.php',
          'title' => 'Lecture 3',
        ],
        (object) [
          'path' => '/lectures/2018-01-22-ps2.php',
          'title' => 'In Class Problem Set 2',
        ],
        (object) [
          'path' => '/lectures/2018-01-29-lec4.php',
          'title' => 'Lecture 4',
        ],
        (object) [
          'path' => '/lectures/2018-02-05-lec5.php',
          'title' => 'Lecture 5',
        ],
        (object) [
          'path' => '/lectures/2018-02-05-ps3.php',
          'title' => 'In Class Problem Set 3',
        ],
        (object) [
          'path' => '/lectures/2018-02-19-lec7.php',
          'title' => 'Lecture 7',
        ],
      ],
    ];

    function component_content() {

    }

    layout_collection_list();
    exit();
}
