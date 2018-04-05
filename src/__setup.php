<?php
require_once 'config.php';
try {
  debug('User::insert', User::insert((object) [
    'username' => 'student',
    'password' => 'password',
    'role' => 'student'
  ]));
} catch (DatabaseException $err) {
  debug('User::insert', $err->getMessage());
}

try {
  debug('User::insert', User::insert((object) [
    'username' => 'Brennan',
    'password' => 'password',
    'role' => 'instructor'
  ]));
} catch (DatabaseException $err) {
  debug('User::insert', $err->getMessage());
}


try {
  debug('Gradable::insert', Gradable::insert((object) [
    'name' => 'a1',
    'weight' => 0.25,
  ]));
} catch (DatabaseException $err) {
  debug('Gradable::insert', $err->getMessage());
}

try {
  debug('Gradable::insert', Gradable::insert((object) [
    'name' => 'a2',
    'weight' => 0.35,
  ]));
} catch (DatabaseException $err) {
  debug('Gradable::insert', $err->getMessage());
}

try {
  debug('Grade::insert', Grade::insert((object) [
    'student_username' => 'student',
    'gradable_name' => 'a1',
    'grade' => 0.85,
    'remark_status' => 'not-requested',
    'remark_message' => NULL,
  ]));
} catch (DatabaseException $err) {
  debug('Gradable::insert', $err->getMessage());
}

try {
  debug('Grade::insert', Grade::insert((object) [
    'student_username' => 'student',
    'gradable_name' => 'a2',
    'grade' => 0.92,
    'remark_status' => 'not-requested',
    'remark_message' => NULL,
  ]));
} catch (DatabaseException $err) {
  debug('Gradable::insert', $err->getMessage());
}
