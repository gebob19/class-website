<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Remark Requests'
    ];

    function component_content() {
      $remark_requests = Grade::selectRemarkRequests();
      if (count($remark_requests) == 0) {
        echo "no remark requests";
      } else {
        ?>
        <div class="studentgrades--table">
          <div class="studentgrades--table-row studentgrades--table-firstrow">
            <span class="studentgrades--table-row-cell">
              Student
            </span>
            <span class="studentgrades--table-row-cell">
              Grade Name
            </span>
            <span class="studentgrades--table-row-cell">
              Current Grade
            </span>
            <span class="studentgrades--table-row-cell">
              Remark Message
            </span>
          </div>
          <?php
          foreach( $remark_requests as $remark_request):?>
          <div class="studentgrades--table-row">
            <span class="studentgrades--table-row-cell">
              <?= $remark_request->student_username?>
            </span>
            <span class="studentgrades--table-row-cell">
              <?= $remark_request->gradable_name?>
            </span>
            <span class="studentgrades--table-row-cell">
              <?= $remark_request->grade?>
            </span>
            <span class="studentgrades--table-row-cell">
              <?= $remark_request->remark_message?>
            </span>
          </div><?php endforeach;?>
        <div><?php
      }
    }
    layout_default();
    exit();
}
