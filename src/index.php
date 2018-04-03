<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Announcements',
    ];

    function component_content() { ?>
      <?php if (is_logged_in() && has_page_permission($_SESSION['role'], '/student-grades.php')): ?>
        <p>
          Welcome <?= $_SESSION['username'] ?>, <a href="/student-grades.php">click here</a> to see your current
          grades.
        </p>
      <?php endif;

      if (is_logged_in() && has_page_permission($_SESSION['role'], '/feedback.php')): ?>
        <p>
          <a href='/feedback.php'>Submit anonymous feedback here</a>
        </p>
      <?php endif;

      $announcements = Announcement::select();
      foreach ($announcements as $announcement) {
        component_announcement($announcement);
      }
    }

    layout_default();
    exit();
}
