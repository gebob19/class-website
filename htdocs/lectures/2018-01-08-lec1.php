<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lecture 1',
      'attachments' => [
        '/assets/w1/notes-w1.pdf',
        '/assets/w1/notes-w2.pdf',
      ],
    ];
    
    function component_content() { ?>
      <h2 id="lecture-material">Lecture Material</h2>

      <ul>
        <li>
          <p>Expectations of the course</p>
        </li>
        <li>
          <p>What is a database?</p>
        </li>
        <li>
          <p>What database technologies and web technologies are covered in this course?</p>

          <ul>
            <li>
              <p>SQL and PHP</p>
            </li>
            <li>
              <p>HTML, CSS, JavaScript and JQuery</p>
            </li>
          </ul>
        </li>
        <li>
          <p>What is a internet?</p>

          <ul>
            <li>network of computers and routers.</li>
          </ul>
        </li>
        <li>
          <p>What is a protocol?</p>

          <ul>
            <li>We looked at briefly the http protocol and from a very high level understood the request/response workflow.</li>
          </ul>
        </li>
        <li>
          <p>Relation in Database</p>
        </li>
        <li>
          <p>Tuple, record, data row (all mean the same thing). And a collection of these makes up a Relation.</p>
        </li>
        <li>
          <p>Relation Schema (what columns/relation name)</p>
        </li>
        <li>
          <p>Database Schema</p>
        </li>
        <li>
          <p>Foriegn Key and Primary Key</p>
        </li>
      </ul>

      <h2 id="readings">Readings</h2>

      <ol>
        <li>
          <p>
            <a href="http://web.calstatela.edu/library/whatisadatabase.htm">What is a database? Very high level introduction to a Database.</a>
          </p>
        </li>
        <li>
          <p>
            <a href="https://www.w3resource.com/sql/tutorials.php">A basic tutorial on SQL</a>
          </p>
        </li>
        <li>
          <p>
            <a href="https://www.w3schools.com/sql/">Basic introduction to SQL</a>
          </p>
        </li>
        <li>
          <p>
            <a href="https://www.essentialsql.com/what-is-the-difference-between-a-primary-key-and-a-foreign-key/">Difference between a Primary and a Foreign Key.</a>
          </p>
        </li>
      </ol>
    <?php }

    layout_collection_single();
    exit();
}
