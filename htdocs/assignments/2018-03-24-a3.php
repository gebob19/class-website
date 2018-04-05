<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Assignment 3',
      'attachments' => [
        BASEURL . 'assets/a3/CSCB20Assignment3.pdf',
      ],
    ];
    
    function component_content() { ?>
      <p>Due date 5th April</p>
      <p>You will be penalized heavily if you do not follow the deliverable instructions in this handout. </p>
      <p>Note:</p>
      <p>The length of the report is increased to a max of 5 pages so you have enough space for any screenshots and to include the following:</p>
      <p>Also in the report, list the items that each one of you individually worked on. Also clearly mention at the end what % you and your partner worked on.  </p>
    <?php }

    layout_collection_single();
    exit();
}
