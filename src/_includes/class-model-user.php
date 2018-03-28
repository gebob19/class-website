<?php
class User implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `User` (
      `username` varchar(255) NOT NULL UNIQUE,
      `password` varchar(255) NOT NULL,
      `role` ENUM ('student', 'ta', 'instructor') NOT NULL,
      `created_at` datetime NOT NULL,
      `updated_at` datetime NOT NULL,
      PRIMARY KEY (`username`)
    )");
  }
  
  public static function selectByUsername($username) {
    return query("SELECT `username`,
      `password`,
      `role`,
      `created_at`,
      `updated_at`
      FROM `User`
      WHERE `username` = ?", [
      's',
      $username
    ]);
  }

  public static function selectAllByRole($role) {
    return query("SELECT `username`,
      `password`,
      `role`,
      `created_at`,
      `updated_at`
      FROM `User`
      WHERE `role` = ?", [
        's',
        $role
    ]);
  }
  
  public static function insert($data) {
    $now = now();
    return query("INSERT INTO `User` (
      `username`,
      `password`,
      `role`,
      `created_at`,
      `updated_at`
    ) VALUES (
      ?,
      ?,
      ?,
      ?,
      ?
    )", [
      'sssss',
      $data->username,
      hash('sha256', $data->password),
      $data->role,
      $now,
      $now
    ]);
  }
  
  public static function updateByUsername($username, $types, $set) {
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
    
    return query("UPDATE `User` SET $stmt_set WHERE `username` = ?", array_merge(
      [$types],
      $stmt_values,
      [$username]
    ));
  }

  public static function deleteByUsername($username) {
    return query("DELETE FROM `User` WHERE `username` = ?", [
      's',
      $username
    ]);
  }
}
