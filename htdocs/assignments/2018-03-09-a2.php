<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Assignment 2',
      'attachments' => [
        '/assets/a2/a2.pdf',
      ],
    ];
    
    function component_content() { ?>
    <p>Due Date: 9th March @ 11:59p</p>
    <p>You do not have to make your website work for mobile devices. This is optional and not required.</p>
    <p>We will be asking certain groups to stop by and explain their css and html to us and what it did. We will notify these groups over email. </p>
    <p>You will be penalized heavily if you do not follow the deliverable instructions in this handout.</p>
    <?php }

    layout_collection_single();
    exit();
}
