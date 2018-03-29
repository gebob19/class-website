<?php
class Page implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `Page` (
      `path` varchar(255)  NOT NULL UNIQUE,
      `title` text NOT NULL,
      `content` text NOT NULL,
      `created_at` datetime NOT NULL,
      `updated_at` datetime NOT NULL,
      PRIMARY KEY (`path`)
    )");
  }

  public static function select() {
    return query("SELECT `path`,
      `title`,
      `content`,
      `created_at`,
      `updated_at`
      FROM `Page`
    ");
  }

  public static function selectByPath($path) {
    return query("SELECT `path`,
      `title`,
      `content`,
      `created_at`,
      `updated_at`
      FROM `Page`
      WHERE `path` = ?", [
      's',
      $path
    ]);
  }

  public static function insert($data) {
    $now = now();
    return query("INSERT INTO `Page` (
      `path`,
      `title`,
      `content`,
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
        $data->path,
        $data->title,
        $data->content,
        $now,
        $now
      ]);
  }

  public static function updateByPath($path, $types, $set) {
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
    
    return query("UPDATE `Page` SET $stmt_set WHERE `path` = ?", array_merge(
      [$types],
      $stmt_values,
      [$path]
    ));
  }

  public static function deleteByPath($path) {
    return query("DELETE FROM `Page` WHERE `path` = ?", [
      's',
      $path
    ]);
  }
}
