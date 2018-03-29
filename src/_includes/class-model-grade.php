<?php
class Grade implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `Grade` (
      `student_username` varchar(255) NOT NULL,
      `gradable_name` varchar(255) NOT NULL,
      `mark` numeric NOT NULL,
      `remark` boolean DEFAULT false,
      `remark_message` text NULL,
      `remark_status` ENUM('pending', 'approved', 'remarked', 'declined') NULL,
      `created_at` datetime NOT NULL,
      `updated_at` datetime NOT NULL,
      primary key (`student_username`, `gradable_name`),
      foreign key (`student_username`) references `User` (`username`),
      foreign key (`gradable_name`) references `Gradable` (`id`)
    )");
  }

  public static function selectAllGradesOfStudent($student_username) {
    return query("SELECT `student_username`,
      `gradable_name`,
      `mark`,
      `remark`,
      `remark_message`,
      `remark_status`,
      `created_at`,
      `updated_at` WHERE `student_username` = ?
      ", [
      's',
      $student_username
    ]);
  }

  public static function selectAllGradesOfGradable($gradable_name) {
    return query("SELECT `student_username`,
        `gradable_name`,
        `mark`,
        `remark`,
        `remark_message`,
        `remark_status`,
        `created_at`,
        `updated_at` WHERE `gradable_name` = ?
        ", [
        's',
        $gradable_name
      ]);
  }
}
