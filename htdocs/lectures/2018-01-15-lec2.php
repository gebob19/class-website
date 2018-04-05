<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lecture 1',
      'attachments' => [
        BASEURL . 'assets/w2/notes-w2a.pdf',
        BASEURL . 'assets/w2/notes-w2b.pdf',
      ],
    ];
    
    function component_content() { ?>
      <h2 id="lecture-material">Lecture Material</h2>

      <ul>
        <li>
          <p>What is relational algebra?</p>
        </li>
        <li>
          <p>What are the various operations performed on a row(s), column(s) and relation(s)?</p>
          <ul>
            <li>Union</li>
            <li>Intersection</li>
            <li>Difference</li>
            <li>Selection</li>
            <li>Projection</li>
            <li>Cartesian Join</li>
            <li>Theta join</li>
            <li>Natural join</li>
          </ul>
        </li>
      </ul>

      <h2 id="readings">Readings</h2>

      <ol>
        <li>
          <p>
            <a href="http://www.cs.toronto.edu/~faye/343/f07/lectures/wk3/03_RAlgebra.pdf">Examples on joins and other operations using relational algebra. I encourage you to read this.</a>
          </p>
        </li>
        <li>
          <p>
            <a href="http://people.cs.pitt.edu/~chang/156/05algebra.html">More examples on relational algebra.</a>
          </p>
        </li>
        <li>
          <p>
            <a href="https://courses.cs.washington.edu/courses/cse444/10sp/lectures/lecture16.pdf">Examples on the different kinds of join and other operations on relatinal algebra.</a>
          </p>
        </li>
      </ol>
    <?php }

    layout_collection_single();
    exit();
}
