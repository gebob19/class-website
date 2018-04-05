<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
      $page = (object) [
        'title' => 'Course Feedback'
      ];

      function component_content() {
        $all_feedback = Feedback::selectByInstructorUsername($_SESSION['username']);

        if (count($all_feedback) == 0) { 
          echo "No feedback.";
        } else {
          ?>
          <div class="studentgrades--table-row studentgrades--table-firstrow">
            <span class="studentgrades--table-row-cell">
              Feedback
            </span>
            <span class="studentgrades--table-row-cell">
              Date Submitted
            </span>
          </div><?php
          foreach ($all_feedback as $feedback):?>
            <div class="studentgrades--table-row">
                <span class="studentgrades--table-row-cell" style="padding: 5px">
                  <?= $feedback->message ?>
                </span>
                <span class="studentgrades--table-row-cell" style="padding: 5px">
                  <?= $feedback->created_at ?>
                </span>
              </div>
          <?php endforeach;
        }
      }
      layout_default();
      exit();
}
