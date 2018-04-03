<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Registration',
    ];

    function component_content() { ?>
      <img src="/assets/utsc-logo.svg"
        alt="University of Toronto Scaborough Logo"
        style="display: block; margin: 30px auto 0;" />
        
      <form action="register.php" method="POST">
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
        
        <label>
          Role
          <br />
          <select name="role"
            placeholder="Role"
            required />
            <option value="">

            </option>
            <option value="student">
              Student
            </option>
            <option value="ta">
              TA
            </option>
            <option value="instructor">
              Instructor
            </option>
          </select>
        </label>

        <input type="submit"
          value="Register" />

        <?php if (isset($_GET['error'])): ?>
        <p class="text-error">
          <?= print_error_message($_GET['error']); ?>
        </p>
        <?php endif; ?>

        <p>
          <a href="/login.php">Already have an account?</a>
        </p>
      </form>
      <?php
    }

    layout_default();
    exit();

  case 'POST':
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $user_data = User::selectByUsername($username);
    if (count($user_data) > 0) {
      header("Location: /register.php?error=USER_EXISTS");
      die();
    }

    $user = User::insert((object) [
      'username' => $username,
      'password' => $password,
      'role' => $role,
    ]);

    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;

    header("Location: /index.php");
    exit();
}
