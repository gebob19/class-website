<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Calendar',
    ];

    function component_content() { ?>
      <div class="status-404">
        <h1 class="status-404--heading">404</h1>

        <p>
          <strong>Page not found :(</strong>
        </p>
        <p>The requested page could not be found.</p>
      </div>
    <?php }

    layout_default();
    exit();
}
