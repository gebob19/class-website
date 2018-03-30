<?php
  require_once 'config.php';

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    function component_content() {
      ?>
      <form action="login.php" method="POST">
        <input name='username'/>
        <input name='password' type='password'/>
        <input type='submit'/>
      </form>
      <?php
    }
    layout_default();
  } else {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user_data = User::selectByUsername($username);
    if (count($user_data) == 0) {
      echo 'User does not exist';
      die();
    }
    $user = $user_data[0];
    if (User::hashpassword($password) != $user->password) {
      echo 'Incorrect password';
      die();
    }
    session_start();
    header("Location: /index.php");
    $_SESSION['username'] = $user->username;
    die();
  }


