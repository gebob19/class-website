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
    ],
    'ta' => [
      '/index.php',
    ],
    'instructor' => [
      '/index.php',
    ],
  ];
  return in_array($page, $role_permissions[$role]);
}
