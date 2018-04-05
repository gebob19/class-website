<?
require_once 'config.php';
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
debug('User::selectByRole', User::selectByRole('ta'));
debug('User::deleteByUsername', User::deleteByUsername('gebotysb'));
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
    'weight' => 0.25,
  ]));
} catch (DatabaseException $err) {
  debug('Gradable::insert', $err->getMessage());
}
debug('Gradable::updateByName', Gradable::updateByName('a2', 'd', (object) [
  'weight' => 0.20
]));
debug('Gradable::selectByName', Gradable::selectByName('a1'));
debug('Gradable::select', Gradable::select());
try {
  debug('Grade::insert', Grade::insert((object) [
    'student_username' => 'chehabom',
    'gradable_name' => 'a1',
    'grade' => 0.85,
    'remark_status' => 'not-requested',
    'remark_message' => NULL,
  ]));
  debug('Grade::insert', Grade::insert((object) [
    'student_username' => 'chehabom',
    'gradable_name' => 'a2',
    'grade' => 0.8,
    'remark_status' => 'not-requested',
    'remark_message' => NULL,
  ]));
} catch (DatabaseException $err) {
  debug('Grade::insert', $err->getMessage());
}
debug('Grade::updateByStudentUsernameAndGradableName',
  Grade::updateByStudentUsernameAndGradableName('chehabom', 'a1', 'd', (object) [
    'grade' => 0.2
  ]));
debug('Grade::selectByStudentUsername', Grade::selectByStudentUsername('chehabom'));
debug('Grade::selectByGradableName', Grade::selectByGradableName('a1'));
debug('Gradable::deleteByName', Gradable::deleteByName('a1'));
try {
  debug('Feedback::insert', Feedback::insert((object) [
    'instructor_username' => 'chehabom',
    'message'=>'abbas steals from w3schools'
  ]));
} catch (DatabaseException $err) {
  debug('Feedback::insert', $err->getMessage());
}
debug('Feedback::select', Feedback::select());
debug('Announcement::insert', Announcement::insert((object) [
  'title' => 'New Instructor',
  'content' => 'Brennan Gebotys will be your new prof, abbas has stepped down',
  'author_username' => 'chehabom',
]));
debug('Announcement::select', Announcement::select());
debug('Announcement::selectById', Announcement::selectById(1));

try {
  debug('Page::insert', Page::insert((object) [
    'path' => BASEURL . 'a1',
    'title' => 'Assignment 1',
    'content' => 'Please dont forget to submit your src folder',
  ]));
} catch (DatabaseException $err) {
  debug('Page::insert', $err->getMessage());
}
try {
  debug('Page::insert', Page::insert((object) [
    'path' => BASEURL . 'a2',
    'title' => 'Assignment 2',
    'content' => 'Please dont forget to submit your src folder',
  ]));
} catch (DatabaseException $err) {
  debug('Page::insert', $err->getMessage());
}
debug('Page::select', Page::select());
debug('Page::updateByPath', Page::updateByPath(BASEURL.'a1', 's', (object) [
  'content' => 'Due date is 5pm on Sunday.',
]));
debug('Page::selectByPath', Page::selectByPath(BASEURL.'a1'));
debug('Page::deleteByPath', Page::deleteByPath(BASEURL.'a1'));
try {
  debug('Attachment::insert', Attachment::insert((object) [
    'page_path' => BASEURL . 'a2',
    'url' => BASEURL . 'assets/a2/a2.pdf',
  ]));
} catch (DatabaseException $err) {
  debug('Attachment::insert', $err->getMessage());
}
debug('Attachment::updateByPagePathAndUrl',
  Attachment::updateByPagePathAndUrl(BASEURL.'a2', BASEURL.'assets/a2/a2.pdf', 's', (object) [
    'url' => BASEURL . 'assets/a2/a2-new.pdf',
  ]));
debug('Attachment::selectByPagePath', Attachment::selectByPagePath(BASEURL.'a2'));
debug('Attachment::deleteByPagePathAndUrl', Attachment::deleteByPagePathAndUrl(BASEURL.'a2', BASEURL.'assets/a2/a2-new.pdf'));
