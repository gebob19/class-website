<?php
require_once 'config.php';

function component_content() {
  $announcements = Announcement::select();
  foreach ($announcements as $announcement) {
    component_announcement($announcement);
  }
}

layout_default();
