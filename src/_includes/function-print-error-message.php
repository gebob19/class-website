<?php
function print_error_message($error) {
  $codes = [
    'USER_NOT_FOUND' => 'User not found.',
    'PASSWORD_INCORRECT' => 'Password incorrect.',
  ];
  return $codes[$error];
}
