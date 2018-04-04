<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Students Grades'
    ];

    function component_content() {
      $gradables = Gradable::select();
      $students = User::selectByRole('student');
      foreach ($gradables as $gradable):
        $grades = Grade::selectByGradableName($gradable->name); ?>
        <h4><?= $gradable->name ?></h4>

        <div class="studentgrades--table">
          <div class="studentgrades--table-row studentgrades--table-firstrow">
            <span class="studentgrades--table-row-cell">
              Student
            </span>
            <span class="studentgrades--table-row-cell">
              Grade
            </span>
          </div>

          <?php foreach ($grades as $grade): ?>
            <div class="studentgrades--table-row">
              <span class="studentgrades--table-row-cell">
                <?= $grade->student_username ?>
              </span>
              <span class="studentgrades--table-row-cell">
                <?= $grade->grade?>
              </span>
            </div>
            <?php endforeach; ?>
          </div>

          <form class="classgrades--updategrade"
            action="/update-grade.php"
            method="POST"
            style="padding-top: 1em;">
            <div class="classgrades--updategrade-col">
              <label>
                <span>Student</span>
                <select name="student_username" required>
                  <option value=""></option>
                  <?php foreach ($students as $student): ?>
                    <option value="<?= $student->username ?>">
                      <?= $student->username ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </label>
            </div>
            <div class="classgrades--updategrade-col">
              <label>
                <span>Grade</span>
                <input name="grade"
                  type="number"
                  min="0"
                  max="1"
                  step="0.01"
                  required />
              </label>
            </div>
            <div class="classgrades--updategrade-col">
              <input type="text"
                name="gradable_name"
                value="<?=$gradable->name?>"
                style="display: none">
              <input type="submit" value="Update"/>
            </div>
          </form>
        <?php endforeach;
    }
    
    layout_default();
    exit();
}