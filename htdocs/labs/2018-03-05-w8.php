<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 8',
      'attachments' => [
        BASEURL . 'assets/lab8/guessingGame.css',
        BASEURL . 'assets/lab8/guessingGame.js',
        BASEURL . 'assets/lab8/guessingGame.html',
        BASEURL . 'assets/lab8/guessingGameSolution.js',
        BASEURL . 'assets/lab8/lab8.pdf',
      ],
    ];
    
    function component_content() {?>
      <p> Download and place this guessingGameSolution.js in the same 
      directory as the HTML and CSS files and change the script source (guessingGame.js to guessingGameSolution.js) in guessingGame.html to run the application. </p>
    <?php }

    layout_collection_single();
    exit();
}
