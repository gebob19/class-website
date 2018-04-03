<?php
function print_error_message($error) {
  $codes = [
    'USER_NOT_FOUND' => 'User not found.',
    'PASSWORD_INCORRECT' => 'Password incorrect.',
    'USER_EXISTS' => 'User already exists.',
  ];
  return $codes[$error];
}
