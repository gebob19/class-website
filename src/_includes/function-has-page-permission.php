<?php
function has_page_permission($role) {
  $page = strtok($_SERVER["REQUEST_URI"], '?');
  $role_permissions = [
    '_public' => [
      '/login.php',
      '/register.php',
    ],
    'student' => [
      '/index.php',
      '/logout.php',
      '/course-team.php',
      '/calendar.php',
      '/lectures.php',
      '/labs.php',
      '/assignments.php',
      '/exams.php',
    ],
    'ta' => [
      '/index.php',
      '/logout.php',
      '/course-team.php',
      '/calendar.php',
      '/lectures.php',
      '/labs.php',
      '/assignments.php',
      '/exams.php',
    ],
    'instructor' => [
      '/index.php',
      '/logout.php',
      '/course-team.php',
      '/calendar.php',
      '/lectures.php',
      '/labs.php',
      '/assignments.php',
      '/exams.php',
    ],
  ];
  return in_array($page, $role_permissions[$role]);
}
