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

      if (is_logged_in() && has_page_permission($_SESSION['role'], '/class-grades.php')): ?>
        <p>
          <a href='/class-grades.php'>
          <?php if ($_SESSION['role'] == 'instructor'): ?>
            Welcome instructor <?=$_SESSION['username']?>, click here to see all grades of your class</a>
          <?php endif; ?>
          <?php if ($_SESSION['role'] == 'ta'): ?>
            Welcome T.A. <?=$_SESSION['username']?>, click here to change grades of your class</a>
          <?php endif; ?>
        </p>
      <?php endif;

      if (is_logged_in() && has_page_permission($_SESSION['role'], '/instructor-feedback.php')): ?>
        <p>
          <a href='/instructor-feedback.php'>
          Click here</a> to view feedback
        </p>
      <?php endif;

      if (is_logged_in() && has_page_permission($_SESSION['role'], '/remark.php')): ?>
      <p>
        <a href='/remark.php'>
        Click here</a> to view all remark requests
      </p><?php endif;
      
      if (is_logged_in() && has_page_permission($_SESSION['role'], '/enter-marks.php')): ?>
      <p>
        <a href='/enter-marks.php'>
        Click here</a> to view all enter student marks
      </p><?php endif;

      $announcements = Announcement::select();
      foreach ($announcements as $announcement) {
        component_announcement($announcement);
      }
    }

    layout_default();
    exit();
}
