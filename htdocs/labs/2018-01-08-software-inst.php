<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Software Installation',
      'attachments' => [],
    ];

    function component_content() { ?>
      <h2 id="mysql-and-sequelpro">MySQL and SequelPro</h2>

      <ol>
        <li>
          <a href="https://dev.mysql.com/downloads/mysql/">Download MySQL</a>
          <ul>
            <li>During installation, a random password will be generated and presented to you as a dialog box. Make sure to save
              this!! You will use this later in SequelPro to connect to your database.</li>
          </ul>
        </li>
        <li>You only need to choose one of the following
          <ul>
            <li>
              <a href="https://www.sequelpro.com">Download SequelPro</a>
            </li>
            <li>
              <a href="https://razorsql.com/download_win.html">Use this 30 day Trial</a>
            </li>
          </ul>
        </li>
      </ol>

      <p>Note: You require 1) and 2) for your first assignment.</p>
    <?php }

    layout_collection_single();
    exit();
}
