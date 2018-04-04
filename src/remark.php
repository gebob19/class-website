<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Remark Requests'
    ];

    function component_content() {
      $remark_requests = Grade::selectRemarkRequests();
      $remark_status_options = Grade::selectRemarkStatusOptions();
      if (count($remark_requests) == 0) {
        echo "no remark requests";
      } else {?>
        <div class="studentgrades--table">
          <div class="studentgrades--table-row studentgrades--table-firstrow">
            <span class="studentgrades--table-row-cell">
              Student
            </span>
            <span class="studentgrades--table-row-cell">
              Grade Name
            </span>
            <span class="studentgrades--table-row-cell">
              Remark Message
            </span>
            <span class="studentgrades--table-row-cell">
              Remark Status
            </span>
          </div>
          <?php
          foreach( $remark_requests as $remark_request):?>
          <div class="studentgrades--table-row">
            <span value='student_name' class="studentgrades--table-row-cell">
              <?= $remark_request->student_username?>
            </span>
            <span class="studentgrades--table-row-cell">
              <?= $remark_request->gradable_name?>
            </span>
            <span class="studentgrades--table-row-cell">
              <?= $remark_request->remark_message?>
            </span>
            <span class="studentgrades--table-row-cell">
              <?= $remark_request->remark_status?>
            </span>
          </div>
          <?php endforeach?>
        <div><?php
      }
    }
    layout_default();
    exit();
}
