<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'My Grades',
    ];

    function component_content() {
      $grades = Grade::selectByStudentUsername($_SESSION['username']);
      debug($grades);
      ?>
      <h3>
        Your Mark Spreadsheets
      </h3>

      <div class="studentgrades--table">
        <div class="studentgrades--table-row studentgrades--table-firstrow">
          <span class="studentgrades--table-row-cell">
            Name
          </span>
          <span class="studentgrades--table-row-cell">
            Graded On
          </span>
          <span class="studentgrades--table-row-cell">
            Result
          </span>
        </div>
        <?php foreach ($grades as $grade): ?>
          <div class="studentgrades--table-row">
            <span class="studentgrades--table-row-cell">
              <?= $grade->gradable_name ?>
            </span>
            <span class="studentgrades--table-row-cell">
              <?= strtok($grade->created_at, ' ') ?>
            </span>
            <span class="studentgrades--table-row-cell">
              <?= round($grade->grade * 100) ?>%
            </span>
          </div>
        <?php endforeach; ?>
      </div>

      <h3>
        Remark Requests
      </h3>

      <form action="/student-remark.php" method="POST" style="padding: 0">
        <label>
          Grade
          <br />
          <select name="gradable_name"
            required />
            <option value=""></option>
            <?php foreach ($grades as $grade):
              if ($grade->remark_status != 'not-requested') continue;?>
              <option value="<?=$grade->gradable_name?>">
                <?=$grade->gradable_name?>
              </option>
            <?php endforeach; ?>
          </select>
        </label>

        <label>
          Remark Explaination
          <br />
          <input name="remark_message"
            type="text"
            placeholder="Remark explaination"
            minlength="1"
            maxlength="256"
            required />
        </label>
        
        <input type="submit"
          value="Submit Remark Request" />
      </form>
    <?php
      if (isset($_GET['success'])):?>
        <p> Your feedback was recorded</p>
      <?php endif;    
    }

    layout_default();
    exit();
}
