<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Remark Requests'
    ];

    function component_content() {
      $remark_requests = array_merge(
        Grade::selectRemarkRequests('requested'),
        Grade::selectRemarkRequests('approved')
      );
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
          foreach ($remark_requests as $remark_request):?>
          <div class="studentgrades--table-row">
            <span class="studentgrades--table-row-cell">
              <?=$remark_request->student_username?>
            </span>
            <span class="studentgrades--table-row-cell">
              <?=$remark_request->gradable_name?>
            </span>
            <span class="studentgrades--table-row-cell">
              <?=$remark_request->remark_message?>
            </span>
            <span class="studentgrades--table-row-cell">
              <?=$remark_request->remark_status?>
              <form action="/remark.php"
                method="POST"
                style="width: auto; padding: 0;">
                <input type="text"
                  name="student_username"
                  value="<?=$remark_request->student_username?>"
                  style="display: none"/>
                <input type="text"
                  name="gradable_name"
                  value="<?=$remark_request->gradable_name?>"
                  style="display: none"/>
                <label>
                  <span>approved</span>
                  <input type="radio"
                    name="remark_status"
                    value="approved" />
                </label>
                <label>
                  <span>declined</span>
                  <input type="radio"
                    name="remark_status"
                    value="declined" />
                </label>
                <label>
                  <span>remarked</span>
                  <input type="radio"
                    name="remark_status"
                    value="remarked" />
                </label>
                <input type="submit"
                  value="Save"
                  style="min-width: 0;"/>
              </form>
            </span>
          </div>
          <?php endforeach?>
        <div><?php
      }
    }
    layout_default();
    exit();
  case 'POST':
    $student_username = $_POST['student_username'];
    $remark_status = $_POST['remark_status'];
    $gradable_name = $_POST['gradable_name'];
    
    Grade::updateByStudentUsernameAndGradableName($student_username, $gradable_name, ['s'], (object)[
      'remark_status' => $remark_status,
    ]);
    header("Location: /remark.php");
    exit();
}
