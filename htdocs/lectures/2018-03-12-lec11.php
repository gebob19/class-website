<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lecture 11',
      'attachments' => [
        BASEURL . 'assets/lecture/w11/config.php',
        BASEURL . 'assets/lecture/w11/fetch.php',
        BASEURL . 'assets/lecture/w11/helloworld.php',
        BASEURL . 'assets/lecture/w11/login.php',
        BASEURL . 'assets/lecture/w11/logout.php',
        BASEURL . 'assets/lecture/w11/session.php',
        BASEURL . 'assets/lecture/w11/welcome.php',
      ],
    ];
    
    function component_content() { ?>
      <h2 id="lecture-material">Lecture Material</h2>
  
      <ul>
        <li>
          <p>PHP and Login</p>
        </li>
        <li>
          <p>Login using PHP and MYSQL</p>
        </li>
        <li>
          <p>HTTP Protocol</p>
        </li>
        <li>
          <p>Server Side Scripting</p>
        </li>
        <li>
          <p>HTTP Post Request</p>
        </li>
      </ul>
  
      <h2 id="in-class-readings">Readings</h2>
      <p> Here are some excellent links to get you familiar with JavaScript: </p>
      1. <a href="https://www.w3schools.com/php/default.asp">https://www.w3schools.com/php/default.asp</a>
      </br>
      2. <a href="https://www.w3schools.com/php/php_forms.asp">https://www.w3schools.com/php/php_forms.asp (php and form handling)</a>
      3. <a href="https://www.w3schools.com/php/php_form_validation.asp">https://www.w3schools.com/php/php_form_validation.asp 
      (php and form validation) <-- you may want to use this for your assignment3.</a>

      <h2>Download and Install PHP on your computer </h2>
      1. <a href='https://www.mamp.info/en/downloads/'>https://www.mamp.info/en/downloads/</a>
      
      <h2>Text Editor to write code in</h2>
      1. <a href='https://www.sublimetext.com'>https://www.sublimetext.com</a>
      <p>I use sublime text to write code, and I encourage you to try this out instead of using notepad or some other text editor. </p>
    <?php }

    layout_collection_single();
    exit();
}
