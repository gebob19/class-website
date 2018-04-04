<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Labs',
      'collection' => [
        (object) [
          'path' => '/labs/2018-01-08-software-inst.php',
          'title' => 'Software Installation',
        ],
        (object) [
          'path' => '/labs/2018-01-08-w1.php',
          'title' => 'Lab 1',
        ],
        (object) [
          'path' => '/labs/2018-01-15-w2.php',
          'title' => 'Lab 2',
        ],
        (object) [
          'path' => '/labs/2018-01-22-w3.php',
          'title' => 'Lab 3',
        ],
        (object) [
          'path' => '/labs/2018-01-29-w4.php',
          'title' => 'Lab 4',
        ],
        (object) [
          'path' => '/labs/2018-02-05-w5.php',
          'title' => 'Lab 5',
        ],
        (object) [
          'path' => '/labs/2018-02-12-w6.php',
          'title' => 'Lab 6',
        ],
        (object) [
          'path' => '/labs/2018-02-26-w7.php',
          'title' => 'Lab 7',
        ],
      ],
    ];

    function component_content() { ?>
      <p>Labs begin from the week of 15th January.</p>

      <ul>
        <li>We will try and post the lab handout for every week by 5pm Sunday. This will give you some time to go over the lab
          handout and prepare before the lab begins.</li>
      </ul>
    <?php }

    layout_collection_list();
    exit();
}
