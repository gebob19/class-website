<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Students Grades'
    ];

    function component_content() {
      $students = User::selectByRole('student');
      
      foreach ($students as $student):
        echo $student->username;?>
        <div class="studentgrades--table">
        <div class="studentgrades--table-row studentgrades--table-firstrow">
          <span class="studentgrades--table-row-cell">
            Grade Name
          </span>
          <span class="studentgrades--table-row-cell">
            Mark
          </span>
        </div>
          <?php
            $grades = Grade::selectByStudentUsername($student->username);
            foreach ($grades as $grade):?>
            <div class="studentgrades--table-row">
              <span class="studentgrades--table-row-cell">
                <?= $grade->gradable_name ?>
              </span>
              <span class="studentgrades--table-row-cell">
                <?= $grade->grade?>
              </span>
            </div>
            <?php endforeach;?>
        </div>
        <?php endforeach;
    }
    
    layout_default();
    exit();
}
