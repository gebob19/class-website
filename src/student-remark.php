<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    $gradable_name = $_POST["gradable_name"];
    $remark_message = $_POST["remark_message"];

    $grades = Grade::selectByStudentUsernameAndGradableName($_SESSION['username'], $gradable_name);
    if (count($grades) == 0) {
      exit();
    }
    $grade = $grades[0];

    if (strcmp($grade->remark_status, 'not-requested') != 0) {
      exit();
    }
    
    Grade::updateByStudentUsernameAndGradableName($_SESSION['username'], $gradable_name, [
      'ss'
    ], (object) [
      'remark_status' => 'requested',
      'remark_message' => $remark_message,
    ]);
    echo "<script>
    alert('success!');
    window.location.href='./student-grades.php';
    </script>";
    exit();
}
