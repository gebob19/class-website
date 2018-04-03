<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Announcements',
    ];

    function component_content() {
      $announcements = Announcement::select();
      foreach ($announcements as $announcement) {
        component_announcement($announcement);
      }
    }

    layout_default();
    exit();
}
