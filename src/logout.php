<?php
require_once 'config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    session_destroy();
    header('Location: /login.php');
    exit();
}
