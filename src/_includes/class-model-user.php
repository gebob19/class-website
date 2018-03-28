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
    return query("SELECT
      `username`,
      `password`,
      `role`,
      `created_at`,
      `updated_at`
      FROM Users
      WHERE username = ?", [
      's',
      $username
    ]);
  }

  public static function getAllByRole($role) {
    return query("SELECT
      `username`,
      `password`,
      `created_at`,
      `updated_at`,
      FROM Users
      WHERE role = ?", [
        's',
        $role
    ]);
  }
  
  public static function insert($data) {
    $now = now();
    return query_insert('User', (object) [
      'values_types' => 'sssss',
      'values' => [
        `username` => $data->username,
        `password` => hash('sha256', $data->password),
        `role` => $data->role,
        `created_at` => $now,
        `updated_at` => $now
      ]
    ]);
  }
  
  public static function update($set_columns, $set_types, $set_values, $where_columns, $where_types, $where_values) {
  }

  public static function delete($where_columns, $where_types, $where_values) {
  }
}
