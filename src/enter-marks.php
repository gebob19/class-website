<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    $page = (object) [
      'title' => 'Entering Marks'
    ];

    function component_content() {
      
    }

    layout_default();
    exit();
}
