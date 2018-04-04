<?php
function has_page_permission($role, $page=NULL) {
  $page = $page ?: strtok($_SERVER["REQUEST_URI"], '?');
  $role_permissions = [
    '_public' => [
      '/login.php',
      '/404.php',
      '/register.php',
    ],
    'student' => [
      '/feedback.php',
      '/submit-feedback.php',
      '/index.php',
      '/404.php',
      '/logout.php',
      '/course-team.php',
      '/calendar.php',
      '/lectures.php',
      '/labs.php',
      '/assignments.php',
      '/exams.php',
      '/student-grades.php',
      '/student-remark.php',
    ],
    'ta' => [
      '/index.php',
      '/404.php',
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
      '/404.php',
      '/logout.php',
      '/course-team.php',
      '/calendar.php',
      '/lectures.php',
      '/labs.php',
      '/assignments.php',
      '/exams.php',
      '/instructor-grades.php'
    ],
  ];
  return in_array($page, $role_permissions[$role]);
}
