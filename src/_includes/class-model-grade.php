<?php
class Grade implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `Grade` (
      `student_username` varchar(255) NOT NULL,
      `gradable_id` varchar(255) NOT NULL,
      `grade` numeric NOT NULL,
      `remark_status` ENUM('not-requested', 'requested', 'approved', 'remarked', 'declined') DEFAULT 'not-requested',
      `remark_message` text NULL,
      `created_at` datetime NOT NULL,
      `updated_at` datetime NOT NULL,
      primary key (`student_username`, `gradable_id`),
      foreign key (`student_username`) references `User` (`username`),
      foreign key (`gradable_id`) references `Gradable` (`id`)
    )");
  }

  public static function selectByStudentUsername($student_username) {
    return query("SELECT `student_username`,
      `gradable_id`,
      `grade`,
      `remark_status`,
      `remark_message`,
      `created_at`,
      `updated_at`
      FROM `Grade`
      WHERE `student_username` = ?", [
      's',
      $student_username
    ]);
  }
  
  public static function selectByGradableId($gradable_id) {
    return query("SELECT `student_username`,
      `gradable_id`,
      `grade`,
      `remark_status`,
      `remark_message`,
      `created_at`,
      `updated_at`
      FROM `Grade`
      WHERE `gradable_id` = ?", [
      's',
      $gradable_id
    ]);
  }

  public static function insert($data) {
    $now = now();
    return query("INSERT INTO `Grade` (
      `student_username`,
      `gradable_id`,
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
      $data->gradable_id,
      $data->grade,
      $data->remark_status,
      $data->remark_message,
      $now,
      $now
    ]);
  }
  
  public static function updateById($id, $types, $set) {
    $now = now();
    
    $stmt_set = [];
    $stmt_values = [];
    foreach ($set as $column => $value) {
      $stmt_set[] = "`$column` = ?";
      $stmt_values[] = $value;
    }

    $types .= 's';
    $stmt_set[] = "`updated_at` = ?";
    $stmt_values[] = $now;

    $stmt_set = implode(', ', $stmt_set);
    $types .= 's';
    
    return query("UPDATE `Gradable` SET $stmt_set WHERE `id` = ?", array_merge(
      [$types],
      $stmt_values,
      [$id]
    ));
  }
}
