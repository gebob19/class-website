<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Login',
    ];

    function component_content() { ?>
      <img src="/assets/utsc-logo.svg"
        alt="University of Toronto Scaborough Logo"
        style="display: block; margin: 30px auto 0;" />
        
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

        <?php if (isset($_GET['error'])): ?>
        <p class="text-error">
          <?= print_error_message($_GET['error']); ?> Please try again.
        </p>
        <?php endif; ?>

        <p>
          <a href="/register.php">Don't have an account?</a>
        </p>
      </form>
      <?php
    }

    layout_default();
    exit();

  case 'POST':
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $user_data = User::selectByUsername($username);
    if (count($user_data) == 0) {
      header("Location: /login.php?error=USER_NOT_FOUND");
      die();
    }

    $user = $user_data[0];
    if (User::hashpassword($password) != $user->password) {
      header("Location: /login.php?error=PASSWORD_INCORRECT");
      die();
    }

    $_SESSION['username'] = $user->username;
    $_SESSION['role'] = $user->role;
    
    header("Location: /index.php");
    exit();
}
