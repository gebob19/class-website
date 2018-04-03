<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    $gradable_name = $_POST["gradable_name"];
    $remark_message = $_POST["remark_message"];

    $grades = Grade::selectByGradableName($_SESSION['gradable_name']);
    if (count($grades) == 0) {
      exit();
    }

    $grade = $grades[0];
    if ($grade->remark_status != 'not-requested') {
      exit();
    }

    Grade::updateByStudentUsernameAndGradableName($_SESSION['username'], $gradable_name, [
      'ss'
    ], (object) [
      'remark_message' => $remark_message,
      'remark_status' => 'requested',
    ]);
    
    exit();
}
