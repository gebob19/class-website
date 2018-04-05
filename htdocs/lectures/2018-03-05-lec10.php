<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lecture 10',
      'attachments' => [
        BASEURL . 'assets/lecture/w10/fit100-16-dom.ppt',
      ],
    ];
    
    function component_content() { ?>
      <h2 id="lecture-material">Lecture Material</h2>
  
      <ul>
        <li>
          <p>DOM and JavaScript</p>
        </li>
        <li>
          <p>What is DOM?</p>
        </li>
        <li>
          <p>What is JavaScript?</p>
        </li>
        <li>
          <p>Events and EventHandlers in JavaScript</p>
        </li>
      </ul>
  
      <h2 id="in-class-code-instructions">Readings</h2>
      <p> Here are some excellent links to get you familiar with JavaScript: </p>
      1. <a href="https://www.w3schools.com/js/">https://www.w3schools.com/js/ </a>
      </br>
      2. <a href="https://javascript.info/">https://javascript.info/</a>

    <?php }

    layout_collection_single();
    exit();
}
