<?php
class Gradable implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `Gradable` (
      `id` varchar(255) NOT NULL UNIQUE,
      `weight` double precision NOT NULL,
      `created_at` datetime not null,
      `updated_at` datetime not null,
      PRIMARY KEY (id)
    )");
  }
  
  public static function selectAll() {
    return query("SELECT `id`,
      `weight`,
      `created_at`,
      `updated_at`
      FROM `Gradable`");
  }
  
  public static function selectById($id) {
    return query("SELECT `id`,
      `weight`,
      `created_at`,
      `updated_at`
      FROM `Gradable`
      WHERE `id` = ?", [
      's',
      $id
    ]);
  }

  public static function insert($data) {
    $now = now();
    return query("INSERT INTO `Gradable` (
      `id`,
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
      $data->id,
      $data->weight,
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
