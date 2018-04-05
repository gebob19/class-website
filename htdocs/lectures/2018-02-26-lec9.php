<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lecture 9',
      'attachments' => [
        BASEURL . 'assets/lecture/w9/index.css',
        BASEURL . 'assets/lecture/w9/index.html',
        BASEURL . 'assets/lecture/w9/index.js',
        BASEURL . 'assets/lecture/w9/indexOld.html',
        BASEURL . 'assets/lecture/w9/indexOldCSS.html',
      ],
    ];
    
    function component_content() { ?>
      <h2 id="lecture-material">Lecture Material</h2>
  
      <ul>
        <li>
          <p>Padding and Margins in CSS</p>
        </li>
        <li>
          <p>Debugging JavaScript inside Google Chrome Browser</p>
        </li>
        <li>
          <p>Basic Introduction to Events and Event Handler in JavaScript </p>
        </li>
      </ul>
  
      <h2 id="in-class-code-instructions">Readings</h2>
      <a href="https://css-tricks.com/multiple-class-id-selectors/">1. https://css-tricks.com/multiple-class-id-selectors </a>
    <?php }

    layout_collection_single();
    exit();
}
