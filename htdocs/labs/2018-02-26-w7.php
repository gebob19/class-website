<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 7',
      'attachments' => [
        BASEURL . 'assets/lab7/CSS%20is%20Awesome.html',
      ],
    ];
    
    function component_content() {

    }

    layout_collection_single();
    exit();
}
