<?php
$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

if (($errno = mysqli_connect_errno()) and ($error = mysqli_connect_error())) {
  printf("%s: %s\n", $errno, htmlspecialchars($error));
  die();
}
