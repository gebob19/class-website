<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    $gradable_name = $_POST['gradable_name'];
    $student_username = $_POST['student_username'];
    $grade = (double) $_POST['grade'];
    try {
      Grade::insert((object) [
        'student_username' => $student_username,
        'gradable_name' => $gradable_name,
        'grade' => $grade,
        'remark_status' => 'not-requested',
        'remark_message' => NULL,
      ]);
    } catch (DatabaseException $err) {
      Grade::updateByStudentUsernameAndGradableName($student_username, $gradable_name, ['d'], [
        'grade' => $grade
      ]);
    }
    header('Location: '.BASEURL.'class-grades.php');
    exit();
}
