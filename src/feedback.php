<?php
require_once 'config.php';

switch($_SERVER['REQUEST_METHOD']) {
  case 'GET':
  $page = (object) [
      'title' => 'Anonymous Feedback',
    ];

    function component_content() {
      $instructors = User::selectByRole('instructor');
      $i = 1;
      ?>
        
        <form action='/submit-feedback.php' method='POST'>
          <label>
          Instructor
          <select name='instructor_name' required />
            <option value=''></option>
            <?php foreach ($instructors as $instructor):?>
              <option value="<?=$instructor->username?>">
                <?=$i++.".  ".$instructor->username?>
              </option>
            <?php endforeach; ?>
          </select>
          </label>

          <label>
          Question
          <select name='question_answered' required />
          <option value='What do you like about the instructor teaching?'>
            What do you like about the instructor teaching?
          </option>
          <option value='What do you like about the labs?'>
            What do you like about the labs?
          </option>
          <option value='What do you recommend the instructor to do to improve their teaching?'>
            What do you recommend the instructor to do to improve their teaching?
          </option>
          <option value='What do you recommend the lab instructors to do to improve their lab teaching?'>
            What do you recommend the lab instructors to do to improve their lab teaching?
          </option>
          </select>
          </label>

          <label>
          Feedback
          </br>
          <input name='question_answer'
            type='text'
            placeholder=""
            minlength="1"
            maxlength="100"
            required />
          

          <input type='submit'
            value='Submit Feedback' />
        </form>
      <?php
    }
    
    layout_default();
    exit();
}
