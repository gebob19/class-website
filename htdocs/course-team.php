<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Course Team',
    ];

    function component_content() { ?>
      <p>
        <strong>Name:</strong> Abbas Attarwala</p>

      <p>
        <strong>Office Hours:</strong> Mon and Fri from 11:30am to 1:15pm in IC 478</p>

      <p>
        <strong>Name:</strong> Suhailah Rahman</p>

      <p>
        <strong>Office Hours:</strong> See announcements</p>

      <p>
        <strong>Name:</strong> Bryan Tam</p>

      <p>
        <strong>Office Hours:</strong> See announcements</p>

      <p>
        <strong>Name:</strong> Harmanraj Wadhwa</p>

      <p>
        <strong>Office Hours:</strong> See announcements</p>

      <p>
        <strong>Name:</strong> Xia Zhongyang</p>

      <p>
        <strong>Office Hours:</strong> See announcements</p>

      <p>
        <strong>Name:</strong> Nagarjun Ratnesh</p>

      <p>
        <strong>Office Hours:</strong> See announcements</p>
    <?php }

    layout_default();
    exit();
}
