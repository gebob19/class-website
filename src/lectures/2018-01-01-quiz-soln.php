<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'In Class Quiz Solutions',
      'attachments' => [
        '/assets/quizsoln/quiz1soln.pdf',
      ],
    ];
    
    function component_content() {

    }

    layout_collection_single();
    exit();
}
