<?php
class Gradable implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `Gradable` (
      `name` varchar(255) NOT NULL UNIQUE,
      `weight` double precision NOT NULL,
      `created_at` datetime not null,
      `updated_at` datetime not null,
      PRIMARY KEY (name)
    )");
  }
  
  public static function select() {
    return query("SELECT `name`,
      `weight`,
      `created_at`,
      `updated_at`
      FROM `Gradable`");
  }
  
  public static function selectByName($name) {
    return query("SELECT `name`,
      `weight`,
      `created_at`,
      `updated_at`
      FROM `Gradable`
      WHERE `name` = ?", [
      's',
      $name
    ]);
  }

  public static function insert($data) {
    $now = now();
    return query("INSERT INTO `Gradable` (
      `name`,
      `weight`,
      `created_at`,
      `updated_at`
    ) VALUES (
      ?,
      ?,
      ?,
      ?
    )", [
      'sdss',
      $data->name,
      $data->weight,
      $now,
      $now
    ]);
  }
  
  public static function updateByName($name, $types, $set) {
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
    
    return query("UPDATE `Gradable` SET $stmt_set WHERE `name` = ?", array_merge(
      [$types],
      $stmt_values,
      [$name]
    ));
  }

  public static function deleteByName($name) {
    Grade::deleteByGradableName($name);
    return query("DELETE FROM `Gradable` WHERE `name` = ?", [
      's',
      $name
    ]);
  }
}
