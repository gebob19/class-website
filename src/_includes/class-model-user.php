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
  
  public static function select($where_columns, $where_types, $where_values) {
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
  
  public static function update($set_columns, $set_types, $set_values, $where_columns, $where_types, $where_values) {
  }

  public static function delete($where_columns, $where_types, $where_values) {
  }
}
