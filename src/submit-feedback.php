<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    $instructor_username = $_POST['instructor_name'];
    $question_answered = $_POST['question_answered'];
    $question_answer = $_POST['question_answer'];

    $feedback_message = $question_answered . ": " . $question_answer;

    $feedback = (object) [
      'instructor_username' => $instructor_username,
      'message' => $feedback_message,
    ];

    Feedback::insert($feedback);
    echo "<script>
    alert('Thanks for the feedback!');
    window.location.href='./feedback.php';
    </script>";
    exit();
}
