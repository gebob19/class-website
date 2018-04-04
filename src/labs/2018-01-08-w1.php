<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 1',
      'attachments' => [
        '/assets/lab1/lab1.pdf',
        '/assets/lab1/file_basics.txt',
        '/assets/lab1/lists.txt',
        '/assets/lab1/math_str.txt',
        '/assets/lab1/nested.txt',
        '/assets/lab1/while.txt',
        '/assets/lab1/data.txt',
      ],
    ];

    function component_content() { ?>
      <ul>
        <li>
          <p>Review of Python</p>
        </li>
        <li>
          <p>Basic loops, conditional statements, file IO etc.</p>
        </li>
      </ul>
    <?php }

    layout_collection_single();
    exit();
}
