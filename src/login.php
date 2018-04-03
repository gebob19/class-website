<?php
  require_once 'config.php';

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $page = (object) [
      'title' => 'Login',
    ];
    function component_content() {
      ?>
      <form action="login.php" method="POST">
        <label>
          Username
          <br />
          <input name="username"
            type="text"
            placeholder="Username"
            minlength="3"
            maxlength="32"
            pattern="^\w+\d*$"
            title="One or more characters followed by zero or more digits."
            required />
        </label>
        
        <label>
          Password
          <br />
          <input name="password"
            type="password"
            placeholder="Password"
            minlength="8"
            maxlength="64"
            required />
        </label>

        <input type="submit"
          value="Login" />
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


