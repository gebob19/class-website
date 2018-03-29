<?php
function debug() {
  $args = func_get_args();
  foreach ($args as $arg) {
    highlight_string("<? " . var_export($arg, true) . " ?>");
    echo '<br>';
  }
  echo '<br>';
}

require_once ABSPATH . INCLUDES . 'global-db.php';
require_once ABSPATH . INCLUDES . 'class-exception-database.php';
require_once ABSPATH . INCLUDES . 'function-now.php';
require_once ABSPATH . INCLUDES . 'function-query.php';
require_once ABSPATH . INCLUDES . 'interface-model.php';
require_once ABSPATH . INCLUDES . 'class-model-user.php';
require_once ABSPATH . INCLUDES . 'class-model-gradable.php';
require_once ABSPATH . INCLUDES . 'class-model-grade.php';
require_once ABSPATH . INCLUDES . 'class-model-feedback.php';
require_once ABSPATH . INCLUDES . 'class-model-announcement.php';
require_once ABSPATH . INCLUDES . 'component-meta.php';
require_once ABSPATH . INCLUDES . 'component-header.php';
require_once ABSPATH . INCLUDES . 'component-footer.php';
require_once ABSPATH . INCLUDES . 'component-announcement.php';
require_once ABSPATH . INCLUDES . 'component-attachments.php';
require_once ABSPATH . INCLUDES . 'layout-default.php';
require_once ABSPATH . INCLUDES . 'layout-collection-list.php';
require_once ABSPATH . INCLUDES . 'layout-collection-single.php';
require_once ABSPATH . INCLUDES . 'layout-announcements.php';

debug('User::create_table', User::create_table());
debug('Gradable::create_table', Gradable::create_table());
debug('Grade::create_table', Grade::create_table());
debug('Feedback::create_table', Feedback::create_table());
debug('Announcement::create_table', Announcement::create_table());
try {
  debug('User::insert', User::insert((object) [
    'username' => 'chehabom',
    'password' => 'chehabom',
    'role' => 'student'
  ]));
} catch (DatabaseException $err) {
  debug('User::insert', $err->getMessage());
}
debug('User::insert', User::insert((object) [
  'username' => 'gebotysb',
  'password' => 'gebotysb',
  'role' => 'instructor'
]));
debug('User::updateByUsername', User::updateByUsername('chehabom', 's', [
  'role' => 'ta',
]));
debug('User::selectByUsername', User::selectByUsername('gebotysb'));
debug('User::selectAllByRole', User::selectAllByRole('ta'));
debug('User::deleteByUsername', User::deleteByUsername('gebotysb'));
try {
  debug('Gradable::insert', Gradable::insert((object) [
    'id' => 'a1',
    'weight' => 0.25,
  ]));
} catch (DatabaseException $err) {
  debug('Gradable::insert', $err->getMessage());
}
try {
  debug('Gradable::insert', Gradable::insert((object) [
    'id' => 'a2',
    'weight' => 0.25,
  ]));
} catch (DatabaseException $err) {
  debug('Gradable::insert', $err->getMessage());
}
debug('Gradable::updateById', Gradable::updateById('a2', 'd', (object) [
  'weight' => 0.20
]));
debug('Gradable::selectById', Gradable::selectById('a1'));
debug('Gradable::selectAll', Gradable::selectAll());
debug('Grade::insert', Grade::insert((object) [
  'student_username' => 'chehabom',
  'gradable_id' => 'a1',
  'grade' => 0.85,
  'remark_status' => 'not-requested',
  'remark_message' => NULL,
]));
debug('Feedback::insert', Feedback::insert((object) [
  'message'=>'abbas steals from w3schools'
]));
debug('Feedback::selectAll', Feedback::selectAll());
debug('Announcement::insert', Announcement::insert((object) [
  'title' => 'New Instructor',
  'content' => 'Brennan Gebotys will be your new prof, abbas has stepped down',
  'author_username' => 'chehabom',
]));
debug('Announcement::selectAll', Announcement::selectAll());
debug('Announcement::selectById', Announcement::selectById(1));
