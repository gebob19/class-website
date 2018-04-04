<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Midterm Information',
      'attachments' => [
        '/assets/exam/midterm-prep.pdf',
        '/assets/exam/midterm-extraprac.pdf',
        '/assets/exam/midterm-appen.pdf',
        '/assets/exam/midterm-soln.pdf',
      ],
    ];

    function component_content() { ?>
      <h2 id="study-guide">Study Guide</h2>

      <p>Here is a practice midterm exam with solutions for you to practice on. This exam was scheduled sometime in 2009 I believe.</p>

      <h2 id="midterm-appendix">Midterm Appendix</h2>

      <p>The appendix only stresses on those portion of the SQL queries that were not looked at in lecture, but you may have
        encountered when working on in your assignment1</p>

      <h2 id="seating">Seating</h2>

      <p>
        <strong>Date:</strong> February 12th, 2018</p>

      <p>
        <strong>Time:</strong> 9:10am</p>

      <p>
        <strong>Duration:</strong> 1 hour 50 minutes</p>

      <p>
        <strong>Seating:</strong>
      </p>

      <ul>
        <li>
          <p>Last Name A-N in SW 319</p>
        </li>
        <li>
          <p>Last Name P-T in MW 120</p>
        </li>
        <li>
          <p>Last Name U-Z in PO 101</p>
        </li>
      </ul>

      <h2 id="midterm-solutions">Midterm Solutions</h2>

      <p>Solutions for question 2 and question 3</p>
    <?php }

    layout_collection_single();
    exit();
}
