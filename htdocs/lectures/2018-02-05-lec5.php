<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lecture 5',
      'attachments' => [
        '/assets/w5/notes-w5.pdf',
      ],
    ];
    
    function component_content() { ?>
      <h2 id="lecture-material">Lecture Material</h2>

      <p>More Joins now in SQL</p>

      <ul>
        <li>
          <p>Inner Join</p>
        </li>
        <li>
          <p>Natural Join</p>
        </li>
        <li>
          <p>Outer Join</p>
        </li>
        <li>
          <p>Cartesian Join</p>
        </li>
      </ul>

      <p>Views in SQL</p>

      <h2 id="readings">Readings</h2>

      <ol>
        <li>
          <p>
            <a href="https://expertassignmenthelp.com/mysql-concepts-where-in-having-join-clauses-made-easy-2/">This page has lots of interesting material, however, I strongly recommend studying the picture with the different
              kinds of joins</a>
          </p>
        </li>
        <li>
          <p>
            <a href="https://www.w3schools.com/sql/trysql.asp?filename=trysql_select_join_inner">This has some great exercises that you can try online</a>
          </p>
        </li>
      </ol>
    <?php }

    layout_collection_single();
    exit();
}
