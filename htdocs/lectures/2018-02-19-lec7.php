<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lecture 7',
      'attachments' => [
        '/assets/w7/notes-w7.pdf',
        '/assets/w7/bcard.css',
        '/assets/w7/bcard.html',
        '/assets/w7/uoft.png',
      ],
    ];
    
    function component_content() { ?>
      <h2 id="lecture-material">Lecture Material</h2>
  
      <ul>
        <li>
          <p>What is HTML?</p>
        </li>
        <li>
          <p>What is CSS?</p>
        </li>
        <li>
          <p>What is JavaScript?</p>
        </li>
        <li>
          <p>BusinessCard in HTML and CSS. (see code attached).</p>
        </li>
        <li>
          <p>Basic Debugging within Google Chrome Browser</p>
        </li>
      </ul>
  
      <h2 id="in-class-code-instructions">In Class Code Instructions</h2>
  
      <ol>
        <li>
          <p>Make sure to download these files on your computer first.</p>
        </li>
        <li>
          <p>Put all the files in a common directory.</p>
        </li>
        <li>
          <p>Then open the file bcard.html in your browser.</p>
        </li>
      </ol>
    <?php }

    layout_collection_single();
    exit();
}
