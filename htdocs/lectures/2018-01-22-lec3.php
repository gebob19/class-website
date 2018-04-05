<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lecture 3',
      'attachments' => [
        BASEURL . 'assets/w3/notes-w3.pdf',
        BASEURL . 'assets/w3/notes-w3w4.pdf',
      ],
    ];
    
    function component_content() { ?>
      <h2 id="lecture-material">Lecture Material</h2>

      <ul>
        <li>
          <p>Wrapping up Relational Algebra.</p>
        </li>
        <li>
          <p>Starting Week4, we will now get into SQL and MySQL</p>
        </li>
      </ul>

      <h2 id="readings">Readings</h2>

      <ol>
        <li>
          <p>
            <a href="http://www.cs.cornell.edu/projects/btr/bioinformaticsschool/slides/gehrke.pdf">More appropriate after Week4 lecture. However, I am putting them here if you are interested in getting ahead.</a>
          </p>
        </li>
        <li>
          <p>
            <a href="https://www.tutorialspoint.com/dbms/relational_algebra.htm">A very gentle introduction on relational algebra.</a>
          </p>
        </li>
      </ol>
    <?php }

    layout_collection_single();
    exit();
}
