<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 1',
      'attachments' => [
        BASEURL . 'assets/lab1/lab1.pdf',
        BASEURL . 'assets/lab1/file_basics.txt',
        BASEURL . 'assets/lab1/lists.txt',
        BASEURL . 'assets/lab1/math_str.txt',
        BASEURL . 'assets/lab1/nested.txt',
        BASEURL . 'assets/lab1/while.txt',
        BASEURL . 'assets/lab1/data.txt',
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
