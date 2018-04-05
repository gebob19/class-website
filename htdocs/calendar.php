<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Calendar',
    ];

    function component_content() { ?>
      <iframe src="https://calendar.google.com/calendar/embed?src=2dmloe9utkvm19sprfej8d0lcg%40group.calendar.google.com&amp;ctz=America%2FToronto"
        style="border: 0"
        width="100%"
        height="600"
        frameborder="0"
        scrolling="no">
      </iframe>
    <?php }

    layout_default();
    exit();
}

