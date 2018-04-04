<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lecture 4',
      'attachments' => [],
    ];
    
    function component_content() { ?>
      <h2 id="readings">Readings</h2>

      <ol>
        <li>
          <p>
            <a href="https://stackoverflow.com/questions/8696383/difference-between-natural-join-and-inner-join">https://stackoverflow.com/questions/8696383/difference-between-natural-join-and-inner-join</a>
          </p>
        </li>
        <li>
          <p>
            <a href="https://www.w3resource.com/sql/joins/natural-join.php">https://www.w3resource.com/sql/joins/natural-join.php</a>
          </p>
        </li>
        <li>
          <p>
            <a href="https://stackoverflow.com/questions/1018822/inner-join-on-vs-where-clause">https://stackoverflow.com/questions/1018822/inner-join-on-vs-where-clause</a>
          </p>
        </li>
      </ol>
    <?php }

    layout_collection_single();
    exit();
}
