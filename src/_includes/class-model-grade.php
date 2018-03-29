<?php
class Grade implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `Grade` (
      `student_username` varchar(255) NOT NULL,
      `gradable_name` varchar(255) NOT NULL,
      `grade` numeric NOT NULL,
      `remark_status` ENUM('not-requested', 'requested', 'approved', 'remarked', 'declined') DEFAULT 'not-requested',
      `remark_message` text NULL,
      `created_at` datetime NOT NULL,
      `updated_at` datetime NOT NULL,
      primary key (`student_username`, `gradable_name`),
      foreign key (`student_username`) references `User` (`username`),
      foreign key (`gradable_name`) references `Gradable` (`name`)
    )");
  }

  public static function selectByStudentUsername($student_username) {
    return query("SELECT `student_username`,
      `gradable_name`,
      `mark`,
      `remark`,
      `remark_message`,
      `remark_status`,
      `created_at`,
      `updated_at`
      FROM `Grade` 
      WHERE `student_username` = ?", [
      's',
      $student_username
    ]);
  }

  public static function selectByGradableName($gradable_name) {
    return query("SELECT `student_username`,
      `gradable_name`,
      `grade`,
      `remark_status`,
      `remark_message`,
      `created_at`,
      `updated_at`
      FROM `Grade`
      WHERE `gradable_name` = ?", [
      's',
      $gradable_name
    ]);
  }

  public static function insert($data) {
    $now = now();
    return query("INSERT INTO `Grade` (
      `student_username`,
      `gradable_name`,
      `grade`,
      `remark_status`,
      `remark_message`,
      `created_at`,
      `updated_at`
    ) VALUES (
      ?,
      ?,
      ?,
      ?,
      ?,
      ?,
      ?
    )", [
      'ssdssss',
      $data->student_username,
      $data->gradable_name,
      $data->grade,
      $data->remark_status,
      $data->remark_message,
      $now,
      $now
    ]);
  }
}
